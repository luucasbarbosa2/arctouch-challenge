<!DOCTYPE html>
<html lang="en">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130092695-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130092695-1');
</script>



    <?= $this->element('ui_components/header'); ?>


    <body>  

        <?= $this->element('ui_components/menu'); ?>
        <div class ="content-page">
            <div class ="loader hidden"></div>
            <?= $this->fetch('content'); ?>
        </div>
        <?= $this->element('ui_components/footer'); ?>

    </body>
</html>




