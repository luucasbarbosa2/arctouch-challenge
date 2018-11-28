<!DOCTYPE html>
<html lang="en">



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




