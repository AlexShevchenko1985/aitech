<?php
/**
 * Template name: AI Marketplace
 */
get_header();
?>

<section id="section1" class="hero-inner-section">
	<video playsinline autoplay muted loop >
        <source src="<?php echo get_template_directory_uri() ?>/src/video/hero-video.mp4" type="video/mp4">
    </video>
	<div class="container">
		<div class="content-block">
			<div class="heading">
				<h1>Solidus <span>AI</span> TECH</h1>
				<video playsinline autoplay muted loop >
	                <source src="<?php echo get_template_directory_uri() ?>/src/video/hero-video.mp4" type="video/mp4">
	            </video>
                <p>Solidus AI TECH connects developers and users with advanced AI tools, high-performance computing, and quality datasets. Our marketplace offers access to AI models, agents, and stand-alone applications, while fostering community through a dedicated forum.</p>
			</div>
			<div class="btn-holder">
				<a href="" class="btn green-btn">Get started</a>
				<div class="scroll-btn">
                    <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.96552 1.71259V12.7471M5.96552 12.7471L1 7.74707M5.96552 12.7471L10.931 7.74707" stroke="#BBFFEC" stroke-opacity="0.4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
			</div>
		</div>
	</div>
</section>
<section id="section2" class="product-categories">
	<div class="container">
		<div class="heading">
			<h2><b>Revolutionizing</b> <span>AI</span> <br>with Four Powerful Product Categories</h2>
		</div>
		<div class="grid-slider">
			<div class="swiper js-grid-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon1.svg" alt="Icon">
                        </div>
                        <div class="slide-holder">
							<div class="bg"></div>
							<div class="content">
								<h4>Foundational AI Models</h4>
								<p>Solidus AI TECH provides users with high-speed inferencing for open-source models through the SambaNova RDU Technology from our HPC Datacentre in Romania. These models are accessible via API subscriptions, with flexible payment options to meet the needs of businesses, researchers, and developers.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="icon">
							<img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon2.svg" alt="Icon">
						</div>
		                <div class="slide-holder">
		                    <div class="bg"></div>
                            <div class="content">
                                <h4>AI Agents</h4>
                                <p>Publishers can create specialized AI agents designed for specific tasks, offering them to users through simple subscriptions. These agents integrate easily into applications, providing a ready-made solution for automation and productivity.</p>
                            </div>
		                </div>
		            </div>
		            <div class="swiper-slide">
		                <div class="icon">
		                    <img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon3.svg" alt="Icon">
                        </div>
                        <div class="slide-holder">
			                <div class="bg"></div>
			                <div class="content">
			                    <h4>Stand-alone AI Applications</h4>
			                    <p>Publishers can also develop and offer stand-alone AI applications with intuitive interfaces. These applications can be hosted on the publisher’s infrastructure or deployed via our platform, allowing users to subscribe and benefit from powerful AI tools with minimal setup.</p>
			                </div>
		                </div>
		            </div>
		            <div class="swiper-slide">
		                <div class="icon">
		                    <img src="<?php echo get_template_directory_uri() ?>/src/img/grid-icon4.svg" alt="Icon">
                        </div>
                        <div class="slide-holder">
			                <div class="bg"></div>
			                <div class="content">
			                    <h4>Datamart</h4>
			                    <p>Our Datamart offers high-quality labeled datasets from trusted aggregators in the Web 3.0 ecosystem. Users can purchase datasets to train their AI models and build high-impact use cases.</p>
			                </div>
		                </div>
		            </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
		</div>
	</div>
</section>
<section id="section3" class="video-block">
	<div class="container">
		<div class="video-holder">
			<video id="video" poster="<?php echo get_template_directory_uri() ?>/src/img/video-poster.webp" >
                <source src="<?php echo get_template_directory_uri() ?>/src/video/hero-video.mp4" type="video/mp4">
            </video>
            <button id="play-btn" class="play-button"></button>
		</div>
	</div>
</section>
<section id="section4" class="slider-tabs">
	<div class="container">
        <div class="heading">
            <h2>Why <span>Solidus AITECH</span>?</h2>
            <div class="tab-btn-list">
                <div class="tab-btn">Users</div>
                <div class="tab-btn">Publishers</div>
            </div>
        </div>
        <div class="tabs-slider">
            <div class="swiper js-tabs-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="bg"></div>
                            <div class="content">
                                <h4>Cost-Effective Solutions</h4>
                                <p>Flexible subscription models and pay-as-you-go pricing ensure you only pay for what you need, without the burden of maintaining expensive infrastructure.</p>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon1.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="bg"></div>
                            <div class="content">
                                <h4>Access to Cutting-Edge AI</h4>
                                <p>Whether you need foundational AI models, task-specific AI agents, or complete applications, the marketplace offers a wide range of solutions ready for immediate use.</p>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon2.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="bg"></div>
                            <div class="content">
                                <h4>Seamless Integration</h4>
                                <p>Easily integrate AI solutions into your workflows with minimal setup, allowing for faster deployment and quicker results.</p>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon3.svg" alt="Icon">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="tabs-slider">
            <div class="swiper js-tabs-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="bg"></div>
                            <div class="content">
                                <h4>Cost-Effective Solutions</h4>
                                <p>Flexible subscription models and pay-as-you-go pricing ensure you only pay for what you need, without the burden of maintaining expensive infrastructure.</p>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon1.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="bg"></div>
                            <div class="content">
                                <h4>Access to Cutting-Edge AI</h4>
                                <p>Whether you need foundational AI models, task-specific AI agents, or complete applications, the marketplace offers a wide range of solutions ready for immediate use.</p>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon2.svg" alt="Icon">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-holder">
                            <div class="bg"></div>
                            <div class="content">
                                <h4>Seamless Integration</h4>
                                <p>Easily integrate AI solutions into your workflows with minimal setup, allowing for faster deployment and quicker results.</p>
                            </div>
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/tab-icon3.svg" alt="Icon">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
