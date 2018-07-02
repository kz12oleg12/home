<style>
    #link{
        padding: 15px;
        background: rgb(0, 0, 0);
    }

    .footer-name h2 {
        text-align: center;
        text-transform: uppercase;
        color: rgb(255, 255, 255);
        font-size: 14px;

    }

    #link-astanait {
        text-align: center;
        text-transform: uppercase;
        padding: 0 15px;
    }

    #link-astanait a {
        color: rgb(255, 255, 255);
        font-weight: 900;
    }

    #link-astanait a:hover {
        color: #eaaf2f;
    }
</style>

<section id="link">
    <div class="footer-bottom-fon">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg offset-lg-2">
                    <div class="footer-name">
                            <?php 
                            $date = time();
                            $toyear = date('Y', $date);
                            $mintoyear = date('y', $date);
                            $startyear = 2017;
                            echo '<h2>Company © '.(((int)$toyear > $startyear)? $startyear.'-'.$mintoyear : $toyear).' </h2>'; 
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-auto">
                    <div id="link-astanait">
                        <a href="https://astana-it.kz/" class="astana-it">Разработанно в Astanа-IT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>