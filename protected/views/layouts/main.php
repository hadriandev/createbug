<?php

$fbconfig = Yum::module()->facebookConfig;
if(isset($fbconfig)) {
    Yii::import('application.modules.user.vendors.facebook.*');
        require_once('Facebook.php');
    $facebook = new Facebook($fbconfig);
}
?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
 <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

        <!-- blueprint CSS framework -->
<!--        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        [if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <?php Yii::app()->bootstrap->register(); ?>
    </head>

    <body>
        <?php if (isset($fbconfig)): ?>
            <div id="fb-root"></div>
            <script>
                window.fbAsyncInit = function() {
                    FB.init({
                        appId   : '<?php echo $facebook->getAppId(); ?>',
                        status  : <?php echo $fbconfig['status']; ?>, // check login status
                        cookie  : <?php echo $fbconfig['cookie']; ?>, // enable cookies to allow the server to access the session
                        xfbml   : <?php echo $fbconfig['xfbml']; ?> // parse XFBML
                    });

                    // whenever the user logs in, we refresh the page
                    FB.Event.subscribe('auth.login', function() {
                        window.location.reload();
                    });
                };

                (function() {
                    var e = document.createElement('script');
                    e.src = document.location.protocol + '//connect.facebook.net/<?php echo $fbconfig['lang']; ?>/all.js';
                    e.async = true;
                    document.getElementById('fb-root').appendChild(e);
                }());
            </script>
            <style>
                .loggeduser{
                 color: #fff;
                padding-top: 17px;
                line-height: 2px;
                float: left;
                }
            </style>
        <?php endif; ?>
        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="mainmenu">
               <?php 
//               $this->widget('bootstrap.widgets.TbNavbar',array(
//    'items'=>array(
//        array(
//            'class'=>'bootstrap.widgets.TbMenu',
//            'items'=>array(
//                array('label'=>'Home', 'url'=>array('/site/index')),
//                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
//                array('label'=>'Contact', 'url'=>array('/site/contact')),
//                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//            ),
//        ),
//    ),
//)); 
               ?>
     
                       
     <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
    'brand'=>'Hadrian',
    'brandUrl'=>'#',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),                
                array('label'=>'Product', 'url'=>array('/product/admin')),
               
                array('label'=>'Profile', 'url'=>'#', 'items'=>array(
                     array('label'=>'Profile', 'url'=>array('/user/user')),
                )),
                array('label'=>'Shop', 'url'=>'#', 'items'=>array(
                    array('label'=>'Shop Admin', 'url'=>array('/shop/shop/admin')),
                    array('label'=>'Shop', 'url'=>array('/shop/products')),
                    
               )),
            ),
        ),
        '<form class="navbar-search pull-left" action="">
            <input type="text" class="search-query span2" placeholder="Search">
            </form> <div class="loggeduser">Welcome : <a href="#">'. Yii::app()->user->name.'</a></div>',
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/user'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Registration', 'url'=>array('/registration/registration/registration'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
//                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
//                    array('label'=>'Action', 'url'=>'#'),
//                    array('label'=>'Another action', 'url'=>'#'),
//                    array('label'=>'Something else here', 'url'=>'#'),
//                    '---',
//                    array('label'=>'Separated link', 'url'=>'#'),
//                        )),
                    ),
                ),
            ),
        )); ?>

            </div><!-- mainmenu -->
           <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

<?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                All Rights Reserved.<br/>
<?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
