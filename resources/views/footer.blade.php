<style>
    .contDetails h6, .contDetails i{
        float: left;
    }
    .contact-details i {
        font-size: 1.25rem  !important;
        font-weight: 500 !important;
    }
    .pages > .nav-item .nav-link {
        color: #ffffff;
        border-right: 1px solid #f3f3f3;
        padding-top: 0;
        padding-bottom: 0;
        font-size: 0.9375rem;
        font-family: "Open Sans", sans-serif;
        line-height: 1;
    }
    footer, .contNews p, .contNews h6, .contDetails p, .contDetails h6, .clearfix span {
        font-family: "Open Sans", sans-serif !important;
        font-weight:400;
    }
    @media screen and (max-width: 768px){
        .contact-details{
            padding-top:20px;
        }
        .contDetails{
          display: block !important;
          margin: auto !important;
          text-align:center !important;
        }
        .pages > .nav-item{
            margin: auto;
        }
        .nav{
            margin-bottom: 30px !important: 
        }
        ul{
            padding: 1.5rem !important;
        }
        .contNews{
            padding: 40px !important;
            text-align: center !important;
        }
        .pages{
            margin:auto;
        }
    }
</style>
<footer class="container-fluid footer pb-0" style="background:#312d2d;padding-top:80px;">
    
    <div class="row pb-5 text-white footer-top">
        <div class="col-md-8 mx-auto">
            <div class="row">
                <div class="col-md-3 mb-3 mt-0 ">
                    <img src="/images/logoEstandar4.jpeg" class="brand-logo d-block mx-auto" alt="logo Heiwork.com" style="width:120px;border-radius:3px;" />
                <!--
                    <div class="d-flex flex-row footer-social-icons">
                        <i class="ti-facebook bg-facebook"></i>
                        <i class="ti-google bg-google"></i>
                        <i class="ti-dribbble bg-dribbble"></i>
                        <i class="ti-twitter-alt bg-twitter"></i>
                    </div>
                -->
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="row contact-details">
                        <div class="col-12 d-flex mb-3">
                            <div class="contDetails">
                                <i class="ti-mobile mr-2"></i>
                                <h6 class="font-weight-normal">(+598) 91403253</h6>
                            </div>
                        </div>
                        <div class="col-12 d-flex mb-3">
                            <div class="contDetails">
                                <i class="ti-settings mr-2"></i>
                                <h6 class="font-weight-normal">hello@heiwork.com</h6>
                            </div>
                        </div>
                    </div>
                    <ul class="nav mt-3 pages">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="/planes">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre-nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 contNews">
                    
                    <h6>Nuestras Redes</h6>
                    <p>Síguenos para enterarte de nuestras las últimas novedades.</p>
                    <!--        
                    <div class="mt-3">
                        <input type="email" class="form-control" placeholder="Enter your email"/>
                    </div>-->
                    <a href="https://www.facebook.com/heiworkoficialpage" style="color: none;text-decoration: none;background: transparent;color: white;">
                         <i class="ti-facebook bg-facebook p-2"></i>
                    </a>
                    <a href="https://twitter.com/heiworkers" style="color: none;text-decoration: none;background: transparent;color: white;">
                        <i class="ti-twitter-alt bg-twitter p-2"></i>
                    </a>
                    <a href="https://instagram.com/heiwork" style="color: none;text-decoration: none;background: transparent;color: white;">
                        <i class="ti-instagram p-2" style="  background: rgb(200,204,29);background:linear-gradient(32deg, rgb(194, 198, 54) 15%, rgb(114, 26, 130) 100%, rgb(2, 2, 1) 100%); "></i>
                    </a>
                    <a href="https://www.linkedin.com/in/heiwork-plataforma-freelance-0217b2202/" rel="nofollow" style="color: none;text-decoration: none;background: transparent;color: white;">
                        <i class="ti-linkedin bg-linkedin p-2"></i>
                    </a>
                    <a href="#share" style="color: none;text-decoration: none;background: transparent;color: white;">
                        <i class="ti-sharethis p-2" style="background: grey;"></i>
                    </a>
                    <div class="mt-3">
                        <p><a href="/terminos-condiciones" > Normas de Uso, Privacidad y cookies</a></p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4 footer-bottom" style="background:#55c12e;color:#fff;">
        <div class="col-md-12 mx-auto">
          <div class="container-fluid clearfix">
            <span class="text-black d-block text-center text-sm-left d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="http://heiwork.com/" style="color:#fff;margin:0px 5px;">Heiwork.com</a> All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </div> 
    </div>
</footer>