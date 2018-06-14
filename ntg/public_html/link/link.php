<style>
    #link{
        padding: 15px;
        background: #126f9e;;
    }

    .footer-name h2 {
        text-align: center;
        text-transform: uppercase;
        color: white;
        font-size: 14px;
        font-weight: 600;

    }

    #link-astanait {
        text-align: center;
        text-transform: uppercase;
        padding: 0 15px;
    }

    #link-astanait a {
        color: white;
        font-weight: 600;
    }

    #link-astanait a:hover {
        color: dodgerblue;
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