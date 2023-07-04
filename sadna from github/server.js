const express = require('express');
const app = express();
const path = require('path');

app.use(express.static('public'));

app.get('/menu', (req, res) => {
  res.sendFile(path.join(__dirname, 'menu.json'));
});

app.listen(3000, () => {
  console.log('Server is running on port 3000');
});