var express = require('express');
var router = express.Router();

//childprocess.exec('php -f')
/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Express' });
});

module.exports = router;
