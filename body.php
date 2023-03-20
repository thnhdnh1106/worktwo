<div class="container main-slide" style="padding-bottom:122">
    <div class="col-xl-12 content-right-off">
            <div class="gallery-section">
                <?php include_once('./components/slide.php');?>
                <div class="boxed-list">
                            <div class="boxed-heading">
                                <h3>Bộ chăn ga </h3>
                            </div>
                        <div class="box-item">
                            <div class="row">
                                <?php include_once('./components/slide-image.php')?>
                                    <?php
                                        for ($i=1; $i <6 ; $i++) { 
                                            include_once('./components/grid-slide.php'); 
                                        } 
                                    ?>
                            </div>
                        </div>  
                </div>
                <div class="boxed-list" >
                    <div class="boxed-heading">
                        <h3> Bộ ga chun</h3>
                    </div>
                    <div class="box-item">
                        <div class="row">
                            <?php include_once('./components/slide-image-2.php');?>
                                 <?php
                                        for ($i=1; $i <6 ; $i++) { 
                                            include_once('./components/grid-slide-2.php');
                                        } 
                                    ?>
                        </div>
                    </div>
                </div>
                <div class="boxed-list">
                    <div class="boxed-heading">
                        <h3>Đệm</h3>
                    </div>
                    <div class="box-item">
                        <div class="row">
                            <?php include_once('./components/slide-image-3.php');?>
                                 <?php
                                        for ($i=1; $i <6 ; $i++) { 
                                            include_once('./components/grid-slide-3.php'); 
                                        } 
                                    ?>
                            </div>
                </div>
    </div>
</div>
             
