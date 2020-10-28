<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css"
        type="text/css" />
</head>

<body>

<header>
    <nav>
        <h1>Titel</h1>
        <jdoc:include type="modules" name="top" />
    </nav>    
</header>

<div class="container">


    <main>

        <jdoc:include type="component" />

        <jdoc:include type="modules" name="breadcrumb" />
        <sidebar>
            <jdoc:include type="modules" name="right" />
        </sidebar>

    </main>

    
</div>
<!-- container -->

<footer>
        <jdoc:include type="modules" name="footer" />
</footer>


</body>

</html>