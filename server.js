const express = require("express");
const path = require("path");
const axios = require("axios");
const fs = require("fs");

const app = express();

// ===== MIDDLEWARE =====
app.use(express.json());
app.use(express.urlencoded({ extended: true }));

// ⚠️ IMPORTANT: dezactivăm index.html automat
app.use(express.static(__dirname, { index: false }));

// ===== REDIRECT .html REQUESTS TO CLEAN URLS =====
app.use((req, res, next) => {
  if (req.path.endsWith('.html')) {
    const cleanPath = req.path.slice(0, -5); // remove .html
    return res.redirect(301, cleanPath + (req.query ? '?' + new URLSearchParams(req.query).toString() : ''));
  }
  next();
});

// ===== REDIRECT DUPLICATE LANGUAGE PREFIX (ro/ro/... -> ro/...) =====
app.use((req, res, next) => {
  const match = req.path.match(/^\/(ro|ru)\/\1\//);
  if (match) {
    const lang = match[1];
    const rest = req.path.slice(lang.length * 2 + 2); // remove duplicate prefix
    return res.redirect(301, `/${lang}${rest}`);
  }
  next();
});

// ===== SERVE .html FILES FOR CLEAN URLS =====
app.use((req, res, next) => {
  const filePath = path.join(__dirname, req.path + '.html');
  // Check if .html file exists
  fs.access(filePath, fs.constants.F_OK, (err) => {
    if (!err) {
      return res.sendFile(filePath);
    }
    // If not, check if it's a directory and serve index.html inside
    const dirPath = path.join(__dirname, req.path);
    fs.access(dirPath, fs.constants.F_OK, (errDir) => {
      if (!errDir && fs.statSync(dirPath).isDirectory()) {
        const indexFile = path.join(dirPath, 'index.html');
        fs.access(indexFile, fs.constants.F_OK, (errIndex) => {
          if (!errIndex) {
            return res.sendFile(indexFile);
          }
          next();
        });
      } else {
        next();
      }
    });
  });
});

// ===== PAGINA PRINCIPALĂ (/) =====
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "index.html"));
});

// ===== BLOCARE ACCES DIRECT /index.html =====
app.get("/index.html", (req, res) => {
  res.redirect(301, "/");
});

// ===== API LEAD =====
app.post("/api/lead", async (req, res) => {
  const { name, phone, page, utm } = req.body;

  try {
    const scriptURL = "https://script.google.com/macros/s/AKfycbyle2esnFu5zlrheowxM4ZSBqAHu-LI4xBR7vceFlpFCgBU7W4CMe38O1WPa8glTf3o/exec";

    const params = new URLSearchParams();
    params.append("name", name);
    params.append("phone", phone);
    if (page) params.append("page", page);
    if (utm) params.append("utm", utm);

    await axios.post(scriptURL, params);
    res.json({ ok: true });
  } catch (err) {
    res.status(500).json({ ok: false, error: err.message });
  }
});

// ===== START SERVER =====
const PORT = 5501;
app.listen(PORT, () =>
  console.log(`Server running on http://localhost:${PORT}`)
);
