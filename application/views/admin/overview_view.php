<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="aninsition">
    <div class="page-wrapper">
        
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div class="page-container">
            
            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="tittle-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zndi zndi-plus"></i>add item
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="row n-t-25">
                            <div class="col-sm-6 col-lg-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/footer.php") ?>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>

</body>
</html>