<!DOCTYPE html>

<html lang="en">
        <?= $this->element('ui_components/header'); ?>


    <body>  

        <?= $this->element('ui_components/menu'); ?>
        
        <?= $this->fetch('content'); ?>
        <?= $this->element('ui_components/footer'); ?>

    </body>
</html>




