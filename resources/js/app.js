app.use((req, res, next) => {
  console.log(`${req.method} ${req.url}`);
  next();
});

const cors = require('cors');
app.use(cors({
  origin: 'http://localhost:3000', 
  credentials: true
}));