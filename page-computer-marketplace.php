<?php
/* Template Name: Compute marketplace */

get_header();
?>

<section id="section1" class="hero-section">
    <video playsinline autoplay muted loop >
        <source src="<?= get_template_directory_uri() . '/build/video/Hero-Animation.mp4' ?>" type="video/mp4">
        <source src="<?= get_template_directory_uri() . '/build/video/Hero-Animation.webm' ?>" type="video/webm">
    </video>

    <div class="container">
        <div class="heading">
            <h1>The Democratization <br>of <span>AI</span> begins here</h1>
            <p>Power your business with cutting edge computational technology</p>
        </div>

        <a href="" class="btn">Get started</a>

        <div class="partners">
            <a href="" class="partners__item"><img src="<?= get_template_directory_uri() . '/build/img/nvidia.svg' ?>" alt="">Inception partner</a>
            <a href="" class="partners__item"><img src="<?= get_template_directory_uri() . '/build/img/SambaNova.svg' ?>" alt="">Web 3.0 partner</a>
        </div>
    </div>
</section>

<section id="section2" class="section-bring">
    <div class="container">
        <h2>Bringing in the <span>fastest AI inferencing <br>
            and training service in the world</span> at the <br>most economic price</h2>

        <div class="video-container">
            <video id="video" poster="<?= get_template_directory_uri() . '/build/img/image (1).png' ?>" >
                <source src="<?= get_template_directory_uri() . '/build/video/Hero-Animation.mp4' ?>" type="video/mp4">
            </video>
            <button id="play-btn" class="play-button"></button>
        </div>

        <a href="" class="btn">Get started</a>
    </div>
</section>

<section id="section3" class="section-unlock">
    <div class="container">
        <h2>Unlock <span>Unmatched <br>Performance</span> and Savings</h2>
        <div class="row">
            <div class="info-item full-width hover-video">
                <div class="corner-element corner">
                    <img src="<?= get_template_directory_uri() . '/build/img/speed.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <h3>Unparalleled AI Training and Inferencing Speeds</h3>
                    <p>Via our partnership with SambaNova, the world's first manufacturers of Reconfigurable Dataflow Units (RDUs), we bring you access to the worlds fastest AI Inferencing and Training speeds</p>
                    <div class="content">
                        <div class="content__item">
                            <p>Offering 10X faster AI training and inferencing speeds vs traditional GPUs (HGX H100s)</p>
                        </div>
                        <div class="separator"></div>
                        <div class="content__item">
                            <p>At 1/10th the cost for users of computational power compared to other AI Cloud Solutions</p>
                        </div>
                        <div class="separator"></div>
                        <div class="content__item">
                            <p>Supports models with up to 5 trillion parameters</p>
                        </div>
                    </div>
                </div>
                <div class="img-wrap">
                    <video muted loop poster="">
                        <source src="<?= get_template_directory_uri() . '/build/video/Inferencing Speeds background-2X.mp4' ?>" type="video/mp4">
                        <source src="<?= get_template_directory_uri() . '/build/video/Inferencing Speeds Background-2X.webm' ?>" type="video/webm">
                    </video>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="info-item side-center hover-video">
                <div class="corner-element side">
                    <img src="<?= get_template_directory_uri() . '/build/img/ease-of-use.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <h3>Ease of use</h3>
                    <p>Our platform is designed with the user in mind. Accessing Computational Power is straightforward, requiring just a few mouse clicks.</p>
                    <a href="" class="btn">Get started</a>
                </div>
                <div class="img-wrap">
                    <video muted loop  poster="">
                        <source src="<?= get_template_directory_uri() . '/build/video/Ease-Of-Use-2X.mp4' ?>" type="video/mp4">
                        <source src="<?= get_template_directory_uri() . '/build/video/Ease-Of-Use-2X.webm' ?>" type="video/webm">
                    </video>
                </div>
            </div>

            <div class="info-item small hover-video">
                <div class="corner-element corner">
                    <img src="<?= get_template_directory_uri() . '/build/img/protection.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <h3>Protection against Crypto Volatility</h3>
                    <p>Users are protected against the volatility of the Crypto market through our on-platform credit point system which ensures that the value of the deposits made by the users do not fluctuate with the token price</p>
                </div>
                <div class="img-wrap">
                    <video muted loop  poster="">
                        <source src="<?= get_template_directory_uri() . '/build/video/59Afff - 2X.mp4' ?>" type="video/mp4">
                        <source src="<?= get_template_directory_uri() . '/build/video/59Afff - 2X.webm' ?>" type="video/webm">
                    </video>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="info-item small no-title hover-video">
                <div class="corner-element corner">
                    <img src="<?= get_template_directory_uri() . '/build/img/user-protection.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <p>Users are protected against the volatility of the Crypto market through our on-platform credit point system which ensures that the value of the deposits made by the users do not fluctuate with the token price</p>
                </div>
                <div class="img-wrap">
                    <video muted loop  poster="">
                        <source src="<?= get_template_directory_uri() . '/build/video/Global Coverage-2X.mp4' ?>" type="video/mp4">
                        <source src="<?= get_template_directory_uri() . '/build/video/Global Coverage-2X.webm' ?>" type="video/webm">
                    </video>
                </div>
            </div>

            <div class="info-item">
                <div class="corner-element side bottom">
                    <img src="<?= get_template_directory_uri() . '/build/img/computation-power.svg' ?>" alt="">
                </div>
                <div class="content-wrap">
                    <div class="switcher">
                        <span class="left active">A100</span>
                        <span class="right">H100</span>
                    </div>
                    <h3>Economic Computation Power</h3>
                    <p>Gain access to cutting edge computational power at competitive prices</p>
                </div>
                <div class="img-wrap">
                    <img src="<?= get_template_directory_uri() . '/build/img/card image.webp' ?>" alt="">
                </div>
            </div>
        </div>

    </div>
</section>

<section id="section4" class="section-coming-soon">
    <div class="container">
        <h2>Coming soon</h2>
        <div class="content">
            <div class="item">
                <h3><img src="<?= get_template_directory_uri() . '/build/img/gpu.svg' ?>" alt="">GPU Virtualization</h3>
                <p>We ensure global access to our platform via 3rd party vendors from all parts of the globe ensuring access to all categories of computational hardware in all the major markets</p>
                <img src="<?= get_template_directory_uri() . '/build/img/card image (2).webp' ?>" alt="">
            </div>
            <div class="item">
                <h3><img src="<?= get_template_directory_uri() . '/build/img/autoscaling.svg' ?>" alt="">Autoscaling</h3>
                <p>No need to micromanage your instances to increase your computational capacity. Autoscaling allows you to start with minimal resources and automatically scale up to meet demand.</p>
                <img src="<?= get_template_directory_uri() . '/build/img/card image (3).webp' ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section id="section5" class="section-start-using">
    <div class="container">
        <h2>Start <span>using GPUs</span> in few <br>
            <span>simple</span> steps</h2>
        <div class="section-content">
            <div class="items">

                <div class="item active">
                    <div class="corner-element">
                        <span>1</span>
                    </div>
                    <div class="logo">
                        <img src="<?= get_template_directory_uri() . '/build/img/create-account.svg' ?>" alt="">
                    </div>
                    <div class="content">
                        <h4>Create account</h4>
                        <p>Sign up quickly and securely to get started with your account.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="corner-element">
                        <span>2</span>
                    </div>
                    <div class="logo">
                        <img src="<?= get_template_directory_uri() . '/build/img/deposit.svg' ?>" alt="">
                    </div>
                    <div class="content">
                        <h4>Deposit funds</h4>
                        <p>Sign up quickly and securely to get started with your account.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="corner-element">
                        <span>3</span>
                    </div>
                    <div class="logo">
                        <img src="<?= get_template_directory_uri() . '/build/img/buy-deploy.svg' ?>" alt="">
                    </div>
                    <div class="content">
                        <h4>Buy & Deploy GPU</h4>
                        <p>Sign up quickly and securely to get started with your account.</p>
                    </div>
                </div>

            </div>
            <div class="info">
                <img src="<?= get_template_directory_uri() . '/build/img/create-account.png' ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section id="section6" class="section-access">
    <div class="container">
        <div class="content-wrap">
            <h2>Access to a <span>wide range of GPUs</span> from external vendors <span>around the globe</span></h2>
            <p>ensures the availability of low latency compute power from anywhere around the globe</p>
            <a href="" class="btn">Get started</a>
        </div>
        <div class="img-wrap">
            <video playsinline autoplay muted loop poster="">
                <source src="<?= get_template_directory_uri() . '/build/video/Globe-Gpu 2X.mp4' ?>" type="video/mp4">
                <source src="<?= get_template_directory_uri() . '/build/video/Globe-Gpu 2X.webm' ?>" type="video/webm">
            </video>
        </div>
    </div>
</section>

<section id="section7" class="section-unleash">
    <div class="container">
        <h2>Unleash <span>Innovation</span> with <br>our <span>AI Ecosystem</span></h2>
        <div class="img-wrap">
            <img src="<?= get_template_directory_uri() . '/build/img/unleash.webp' ?>" alt="">
        </div>
        <div class="content-wrap">
            <img src="<?= get_template_directory_uri() . '/build/img/solidus.svg' ?>" alt="">
            <div class="content-item">
                <h4>Cutting edge AI solutions</h4>
                <p>Users can access a wide array of AI applications tailored for both business and personal use - ranging across multiple industries and functions.</p>
            </div>
            <div class="content-item">
                <h4>Demand Sourcing</h4>
                <p>Our AI Marketplace attracts demand from AI developers and users, ensuring a vibrant ecosystem of innovative AI solutions.</p>
            </div>
        </div>
    </div>
</section>

<section id="section8" class="section-effortless-hosting">
    <div class="container">
        <h2><span>Effortless Hosting</span></h2>
        <div class="content-wrap">
            <div class="content-item hover-video">
                <video muted loop poster="">
                    <source src="<?= get_template_directory_uri() . '/build/video/Simple Onboarding 2X.mp4' ?>" type="video/mp4">
                    <source src="<?= get_template_directory_uri() . '/build/video/Simple Onboarding 2X.webm' ?>" type="video/webm">
                </video>

                <h4>Simple <br>Onboarding</h4>
                <p>Hosting your machines on our advanced platform is remarkably easy, follow a few simple steps.</p>
            </div>
            <div class="content-item hover-video">
                <video muted loop poster="">
                    <source src="<?= get_template_directory_uri() . '/build/video/Sourcing Demand 2X.mp4' ?>" type="video/mp4">
                    <source src="<?= get_template_directory_uri() . '/build/video/Sourcing Demand 2X.webm' ?>" type="video/webm">
                </video>

                <h4>Sourcing demand for your Machines via our AI Marketplace</h4>
                <p>Our AI demand aggregation platform channels requests directly to you, maximizing utilization.</p>
                <a href="" class="btn">Get started</a>
            </div>
            <div class="content-item hover-video">
                <video muted loop poster="">
                    <source src="<?= get_template_directory_uri() . '/build/video/Streamlined Transactions 2X.mp4' ?>" type="video/mp4">
                    <source src="<?= get_template_directory_uri() . '/build/video/Streamlined Transactions 2X.webm' ?>" type="video/webm">
                </video>

                <h4>Streamlined <br>Transactions</h4>
                <p>Payments and settlements are simplified through AITECH tokens; create an account, start earning.</p>
            </div>
        </div>
    </div>
</section>

<section id="section9" class="section-increase-value">
    <div class="container">
        <div class="content-wrap">
            <h2>Perpetually <span>increasing <br>value</span> of revenue</h2>
            <div class="content">
                <h4>AITECH Tokens</h4>
                <p>AITECH is the world's first deflationary AI token. A share of our profit on every transaction gets burnt. As time progresses and demand increases, the value of the tokens you earn can increase due to increasing demand and decreasing supply.</p>
                <a href="" class="btn">Get started</a>
            </div>
        </div>
        <div class="img-wrap">
            <video playsinline autoplay muted loop poster="">
                <source src="<?= get_template_directory_uri() . '/build/video/coin_2x.webm' ?>" type="video/webm">
            </video>
        </div>
    </div>
</section>

<section id="section10" class="section-multilayered">
    <div class="container">
        <h2>A multilayered <span>AI</span> Marketplace</h2>
        <p>Our 3-tiered AI Marketplace sources demand for your machines. <br>Through our GPU Marketplace, you will get access to users of:</p>

        <div class="content swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide content-item">
                    <div class="text-content">
                        <p>Open Source AI Models</p>
                    </div>
                    <img src="<?= get_template_directory_uri() . '/build/img/slide1.webp' ?>" alt="">
                </div>


                <div class="swiper-slide content-item">
                    <div class="text-content">
                        <p><span>AI Agents</span> developed on open source models used by application and software developers in their solutions</p>
                    </div>
                    <img src="<?= get_template_directory_uri() . '/build/img/slide2.webp' ?>" alt="">
                </div>

                <div class="swiper-slide content-item">
                    <div class="text-content">
                        <p><span>Standalone AI solutions</span> developed <br>for retail and commercial market</p>
                    </div>
                    <img src="<?= get_template_directory_uri() . '/build/img/slide3.webp' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="">

    <div class="container">
        <h2>Perpetually <span>increasing <br>value</span> of revenue</h2>
        <p>Jumpstart your AI projects with blazing-fast GPU rentals. <br>Get started today and unleash your potential!</p>
        <a href="" class="btn">Get started</a>
        <video muted loop poster="">
            <source src="<?= get_template_directory_uri() . '/build/video/Inferencing Speeds background-2X.mp4' ?>" type="video/mp4">
            <source src="<?= get_template_directory_uri() . '/build/video/Inferencing Speeds Background-2X.webm' ?>" type="video/webm">
        </video>
    </div>
</section>

<?php
get_footer();
