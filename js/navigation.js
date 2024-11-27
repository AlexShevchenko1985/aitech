
document.addEventListener("DOMContentLoaded", () => {

	document.querySelector('.menu-trigger').addEventListener("click", toggleMenu);

	function toggleMenu() {
		document.querySelector('.burger').classList.toggle("open");
		document.querySelector('.site-header').classList.toggle("nav-active");

		if (document.body.style.overflow === 'hidden') {
			document.body.style.overflow = 'auto';
		} else {
			document.body.style.overflow = 'hidden';
		}
	}

	const video = document.getElementById('video');
	const playBtn = document.getElementById('play-btn');

	playBtn.addEventListener('click', () => {
		if (video.paused) {
			video.play();
			playBtn.style.display = 'none';
		} else {
			video.pause();
			playBtn.style.display = 'block';
		}
	});

	video.addEventListener('click', () => {
		if (video.paused) {
			video.play();
			playBtn.style.display = 'none';
		} else {
			video.pause();
			playBtn.style.display = 'block';
		}
	});

	video.addEventListener('play', () => {
		playBtn.style.display = 'none';
	});

	video.addEventListener('pause', () => {
		playBtn.style.display = 'block';
	});



	const sideNav = document.querySelector('.side-navigation');
	const sections = document.querySelectorAll('section');

	// Dynamically populate side navigation items
	sections.forEach((section) => {
		const navItem = document.createElement('a');
		navItem.classList.add('side-navigation__item');
		navItem.href = `#${section.id}`;
		sideNav.appendChild(navItem);
	});

	const navItems = document.querySelectorAll('.side-navigation__item');

	// Scroll to the section on click
	navItems.forEach((item) => {
		item.addEventListener('click', (e) => {
			e.preventDefault(); // Prevent default anchor behavior
			const targetId = item.getAttribute('href').substring(1); // Get the ID of the target section
			const targetSection = document.getElementById(targetId);

			// Smooth scroll to the section
			targetSection.scrollIntoView({
				behavior: 'smooth',
				block: 'start', // Align to the top of the section
			});

			// Optional: Update the active class manually (to provide instant feedback)
			navItems.forEach((nav) => nav.classList.remove('active'));
			item.classList.add('active');
		});
	});

	// Highlight the active nav item based on scroll position
	const onScroll = () => {
		let currentSection = null;

		sections.forEach((section) => {
			const rect = section.getBoundingClientRect();
			// Check if the section is in view
			if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
				currentSection = section;
			}
		});

		// Add active class to corresponding nav item
		navItems.forEach((item) => {
			item.classList.remove('active');
			if (item.getAttribute('href') === `#${currentSection?.id}`) {
				item.classList.add('active');
			}
		});
	};

	// Listen to scroll events
	window.addEventListener('scroll', onScroll);

	const infoItems = document.querySelectorAll(".hover-video");

	infoItems.forEach(item => {
		item.addEventListener("mouseenter", () => {
			const video = item.querySelector("video");
			if (video) {
				video.play();
			}
		});

		item.addEventListener("mouseleave", () => {
			const video = item.querySelector("video");
			if (video) {
				video.pause();
			}
		});
	});

	const switcher = document.querySelector(".section-unlock .switcher");

	if ( switcher ) {
		switcher.querySelectorAll('span').forEach(item => {
			item.addEventListener("click", (el) => {
				switcher.classList.toggle("right")
			})
		});
	}

	const startUsingItems = document.querySelectorAll(".section-start-using .item");
	startUsingItems.forEach(item => {
		item.addEventListener('click', () => {
			startUsingItems.forEach(el => el.classList.remove('active'));
			item.classList.add('active');
		});
	});

});








