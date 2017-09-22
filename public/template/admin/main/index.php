<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
 <title><?php echo $this->_title ?></title>
 <?php echo $this->_metaHTTP ?>
 <?php echo $this->_metaName ?>
 <?php echo $this->_fileCss ?>
 <?php echo $this->_fileJs ?>
</head>
<body>
    <?php include_once 'html/header.php'; ?>
    <?php include_once APPLICATION_PATH . DS . $this->_moduleName . DS . 'views' . DS . $this->_fileView . '.php'?>
    <?php include_once 'html/footer.php'; ?>