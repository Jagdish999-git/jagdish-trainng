@extends('layouts.app')
@section('content')

<style>
  body{
    background: -webkit-linear-gradient(left,  black,white,skyblue);
}
.navbar-light .navbar-brand {
			color: #000;
			font-size: 25px;
			text-transform: uppercase;
			font-weight: bold;
			letter-spacing: 2px;
		}
		.navbar-light .navbar-brand span {
			color: #1977cc;
		}
</style>
	<svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-github" viewBox="0 0 32.6 31.8">
				<title>BABAART</title>
			</symbol>
			<symbol id="icon-nav-arrow" viewBox="0 0 90 64">
				<title>nav-arrow</title>
				<path d="M88.148 30.124H6.404L33.208 3.32a1.877 1.877 0 0 0 0-2.652 1.877 1.877 0 0 0-2.652 0L.552 30.67a1.942 1.942 0 0 0-.409.612 1.86 1.86 0 0 0 0 1.432c.094.233.233.44.41.612L30.555 63.33c.367.368.847.552 1.328.552.48 0 .96-.184 1.327-.548a1.877 1.877 0 0 0 0-2.652L6.404 33.874h81.743a1.876 1.876 0 0 0 0-3.75z"/>
			</symbol>
		</svg>
		<main>	
			<div class="content content--fixed">
				
				<a class="github" href="https://github.com/codrops/DecorativeLetterAnimations/" title="Find this project on GitHub"><svg class="icon icon--github"><use xlink:href="#icon-github"></use></svg></a>
			</div>
			<div class="content">
				<div class="slideshow">
					<div class="slide slide--current">
						<div class="slide__bg slide__bg--1"></div>
						<h2 class="word word--1"><svg class="icon icon--drop"><use xlink:href="#icon-drop"></use></svg>BABAA<span style="color:orange">r</span>t</h2>
					</div>
					<div class="slide">
						<div class="slide__bg slide__bg--2"></div>
						<h2 class="word word--2">Creative art</h2>
					</div>
					<div class="slide">
						<div class="slide__bg slide__bg--3"></div>
						<h2 class="word word--3">Sketch artist</h2>
					</div>
					<div class="slide">
						<div class="slide__bg slide__bg--4"></div>
						<h2 class="word word--4">Speed24news</h2>
					</div>
					<div class="slide">
						<div class="slide__bg slide__bg--5"></div>
						<h2 class="word word--5">Web devloper</h2>
					</div>
					<div class="slide">
						<div class="slide__bg slide__bg--7"></div>
						<h2 class="word word--7">Designer</h2>
					</div>
				</div>
				<nav class="slidenav">
					<button class="slidenav__item slidenav__item--prev"><svg class="icon icon--navarrow"><use xlink:href="#icon-nav-arrow"></use></svg></button>
					<button class="slidenav__item slidenav__item--next"><svg class="icon icon--navarrow"><use xlink:href="#icon-nav-arrow"></use></svg></button>
				</nav>
			</div>
		</main>
		<script src="js/charming.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/wordFx.js"></script>
		<script>
			{
				const effects = [
					// Effect 1
					{
						options: {
							shapeColors: ['#6435ea','#295ddc','#9fd7ff','#d65380','#0228f7','#242627']
						},
						hide: {
							lettersAnimationOpts: {
								duration: 800,
								delay: (t,i) => i*40,
								easing: 'easeOutExpo',
								opacity: {
									value: 0, 
									duration: 100,
									delay: (t,i) => i*40,
									easing: 'linear'
								},
								translateY: ['0%', '100%']
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 800,
								delay: (t,i) => i*40,
								easing: 'easeOutElastic',
								opacity: [0,1],
								translateY: ['100%', '0%']
							},
							shapesAnimationOpts: {
								duration: 300,
								delay: (t,i) => i*30+100,
								easing: 'easeOutQuad',
								translateY: () => [anime.random(-15,15),anime.random(-200,200)],
								scale: () => [0.2,randomBetween(0.5,1)],
								opacity: [
									{
										value: 1, 
										duration:1, 
										delay: (t,i) => i*30+100
									}, 
									{
										value: 0,
										duration: 200, 
										delay:200,
										easing: 'linear'}
								]
							}
						}
					},
					// Effect 2
					{
						options: {
							shapeColors: ['#0671e6'],
							shapeTypes: ['circle'],
							shapeFill: false,
							shapeStrokeWidth: 3
						},
						hide: {
							lettersAnimationOpts: {
								duration: 300,
								delay: (t,i,total) => i*25,
								easing: 'easeOutQuad',
								opacity: {
									value: 0, 
									duration: 100, 
									delay: (t,i,total) => i*25,
									easing: 'linear'
								},
								translateY: ['0%','-50%']
							},
							shapesAnimationOpts: {
								duration: 300,
								delay: (t,i) => i*20,
								easing: 'easeOutExpo',
								translateX: t => anime.random(-10,10),
								translateY: t => -1*anime.random(400,800),
								scale: [0.3,0.3],
								opacity: [
									{
										value: 1, 
										duration:1, 
										delay: (t,i) => i*20
									}, 
									{
										value: 0,
										duration: 300, 
										easing: 'linear'
									}
								]
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 800,
								delay: (t,i,total) => Math.abs(total/2-i)*60,
								easing: 'easeOutElastic',
								opacity: [0,1],
								translateY: ['50%', '0%']
							},
							shapesAnimationOpts: {
								duration: 700,
								delay: (t,i) => i*60,
								easing: 'easeOutExpo',
								translateX: () => {
									const rand = anime.random(-100,100);
									return [rand,rand];
								},
								translateY: () => {
									const rand = anime.random(-100,100);
									return [rand,rand];
								},
								scale: () => [randomBetween(0.1,0.3),randomBetween(0.5,0.8)],
								opacity: [{value: 1, duration:1, delay: (t,i) => i*80}, {value:0,duration: 700, easing: 'easeOutQuad',delay: 100}]
							}
						}
					},
					// Effect 3
					{
						options: {
							shapeColors: ['#111']
						},
						hide: {
							shapesAnimationOpts: {
								duration: 200,
								delay: (t,i) => i*20,
								easing: 'easeOutExpo',
								translateX: t => t.dataset.tx,
								translateY: t => t.dataset.ty - anime.random(400,800),
								scale: t => t.dataset.s,
								rotate: 0,
								opacity: {
									value: 0, 
									duration: 200, 
									easing: 'linear'
								}
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 500,
								delay: (t,i) => i*60,
								easing: 'easeOutExpo',
								opacity: {
									value: [0,1], 
									duration: 50,
									delay: (t,i) => i*60,
									easing: 'linear'
								},
								translateY: (t,i) => i%2 ? [anime.random(-350,-300),0] : [anime.random(300,350),0]
							},
							shapesAnimationOpts: {
								duration: () => anime.random(1000,4000),
								delay: (t,i) => i*20,
								easing: [0.2,1,0.3,1],
								translateX: t => {
									const tx = anime.random(-200,200);
									t.dataset.tx = tx;
									return [0,tx];
								},
								translateY: t => {
									const ty = anime.random(-300,300);
									t.dataset.ty = ty;
									return [0,ty];
								},
								scale: t => {
									const s = randomBetween(0.2,0.6);
									t.dataset.s = s;
									return [s,s];
								},  
								rotate: () => anime.random(-90,90),
								opacity: {
									value: 0.6, 
									duration: 1000, 
									easing: 'linear'
								}
							}
						}
					},
					// Effect 4
					{
						options: {
							// shape elements will be on top of the letters
							shapesOnTop: true,
							shapeColors: ['#ec4747','#5447ec','#ecb447','#a847ec','#635f65'],
							totalShapes: 20
						},
						hide: {
							lettersAnimationOpts: {
								duration: 200,
								delay: (t,i,total) => (total-i-1)*20,
								easing: 'easeOutExpo',
								opacity: {
									value: [1,0], 
									duration: 100, 
									delay: (t,i,total) => (total-i-1)*20,
									easing: 'linear'
								},
								scale: [1,0]
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 400,
								delay: (t,i) => i*60,
								easing: 'easeInOutExpo',
								opacity: [0,1],
								translateY: ['-100%', '0%']
							},
							shapesAnimationOpts: {
								duration: 400,
								delay: (t,i) => i*20,
								easing: 'easeOutBack',
								translateX: {
									value: () => [anime.random(-100,100),anime.random(-10,10)],
									easing: 'easeOutExpo',
								},
								translateY: () => [anime.random(-100,0),anime.random(-400,-50)],
								scale: () => {
									const rand = randomBetween(0.2,0.5);
									return [rand,rand];
								},
								rotate: () => anime.random(-15,15),
								opacity: [
									{
										value: 1, 
										duration:1, 
										delay: (t,i) => i*20
									}, 
									{
										value:0,
										duration: 500, 
										easing: 'linear'
									}
								]
							}
						}
					},
					// Effect 5
					{
						options: {
							shapesOnTop: true,
							shapeColors: ['#ec4747','#5447ec','#ecb447','#a847ec','#635f65'],
							shapeFill: false,
							shapeStrokeWidth: 4,
							totalShapes: 30
						},
						show: {
							lettersAnimationOpts: {
								duration: 300,
								delay: (t,i) => i*100,
								easing: 'easeInExpo',
								opacity: [0,1],
								translateY: ['-50%', '0%']
							},
							shapesAnimationOpts: {
								duration: 400,
								delay: (t,i) => i*5+300,
								easing: [0.2,1,0.3,1],
								translateX: () => [0, anime.random(-100,100)],
								translateY: () => [50,anime.random(-100,150)],
								scale: () => [randomBetween(0.2,0.4),randomBetween(0.2,0.4)],
								rotate: () => anime.random(-25,25),
								opacity: [
									{value: 1, duration: 1, easing: 'easeOutQuad', delay: (t,i) => i*5+300}, 
									{value: 0, duration: 250, easing: 'easeOutQuad', delay: 200}
								]
							}
						}
					},
					// Effect 6
					{
						options: {
							shapeColors: ['#fff','#dedede','#8c8c8c','#545454','#000','#dc2e2e']
						},
						hide: {
							lettersAnimationOpts: {
								duration: 200,
								delay: (t,i,total) => (total-i-1)*20,
								easing: 'easeOutExpo',
								opacity: {
									value: [1,0], 
									duration: 100, 
									delay: (t,i,total) => (total-i-1)*20,
									easing: 'linear'
								},
								scale: [1,0]
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 400,
								delay: (t,i) => i*60,
								easing: 'easeInExpo',
								opacity: [0,1],
								scale: [0,1]
							},
							shapesAnimationOpts: {
								duration: 700,
								delay: (t,i) => i*40,
								easing: 'easeOutExpo',
								translateX: () => [0,anime.random(-20,20)],
								translateY: () => [0,anime.random(-400,400)],
								scale: () => [randomBetween(0.2,0.6),randomBetween(0.2,0.6)],  
								rotate: () => [0,anime.random(-16,16)],
								opacity: [
									{value: 1, duration: 1, easing: 'linear'}, 
									{value: 0, duration: 700, easing: 'easeOutQuad'}
								]
							}
						}
					},
					// Effect 7
					{
						options: {
							shapeColors: ['red','#000','#fff'],
							shapeFill: false,
							shapeStrokeWidth: 10
						},
						hide: {
							shapesAnimationOpts: {
								duration: 250,
								delay: (t,i) => i*20,
								easing: 'easeOutExpo',
								translateX: () => [0,anime.random(-200,200)],
								translateY: () => [0,anime.random(-200,200)],
								scale: () => [randomBetween(0.2,0.6),randomBetween(0.2,0.6)],  
								rotate: () => [0,anime.random(-16,16)],
								opacity: [
									{value: 1, duration: 1, easing: 'linear', delay: (t,i) => i*20}, 
									{value: 0, duration: 150, delay: 100, easing: 'easeOutQuad'}
								]
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 400,
								delay: (t,i) => i*60,
								easing: 'easeOutExpo',
								opacity: {
									value: [0,1], 
									duration: 100, 
									easing: 'linear'
								},
								translateY: (t,i) => i%2 ? [anime.random(-350,-300),0] : [anime.random(300,350),0]
							},
							shapesAnimationOpts: {
								duration: 500,
								delay: (t,i) => i*30,
								easing: 'easeOutExpo',
								translateX: () => [0,anime.random(-200,200)],
								translateY: () => [0,anime.random(-200,200)],
								scale: () => [randomBetween(0.2,0.6),randomBetween(0.2,0.6)],  
								rotate: () => [0,anime.random(-16,16)],
								opacity: [
									{value: 1, duration: 1, easing: 'linear'}, 
									{value: 0, duration: 350, delay: 150, easing: 'easeOutQuad'}
								]
							}
						}
					},
					// Effect 8
					{
						options: {
							shapeColors: ['#35c394','#9985ee','#f54665','#4718f5','#f5aa18'],
							shapesOnTop: true
						},
						hide: {
							lettersAnimationOpts: {
								duration: 300,
								delay: (t,i)  => (t.parentNode.children.length-i-1)*30,
								easing: 'easeOutExpo',
								opacity: 0,
								translateY: (t,i) => i%2 === 0 ? '80%' : '-80%',
								rotate: (t,i) => i%2 === 0 ? -25 : 25
							},
							shapesAnimationOpts: {
								duration: 50,
								easing: 'easeOutExpo',
								translateX: t => t.dataset.tx,
								translateY: t => t.dataset.ty,
								scale: 0,
								rotate: 0,
								opacity: {
									value: 0, 
									duration: 50, 
									easing: 'linear'
								}
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 400,
								delay: (t,i)  => (t.parentNode.children.length-i-1)*80,
								easing: 'easeOutElastic',
								opacity: {
									value: [0,1], 
									duration: 100, 
									easing: 'linear'
								},
								translateY: (t,i) => i%2 === 0 ? ['-80%', '0%'] : ['80%', '0%'],
								rotate: [90,0]
							},
							shapesAnimationOpts: {
								duration: () => anime.random(1000,3000),
								delay: (t,i) => i*20,
								easing: 'easeOutElastic',
								translateX: t => {
									const tx = anime.random(-250,250);
									t.dataset.tx = tx;
									return [0,tx];
								},
								translateY: t => {
									const ty = anime.random(-250,250);
									t.dataset.ty = ty;
									return [0,ty];
								},
								scale: t => {
									const s = randomBetween(0.1,0.6);
									t.dataset.s = s;
									return [s,s];
								},  
								rotate: () => anime.random(-90,90),
								opacity: {
									value: 0.6, 
									duration: 1000, 
									easing: 'linear'
								}
							}
						}
					},
					// Effect 9
					{
						options: {
							shapeColors: ['#FD74FF','#3771FC','#7C5CE4','#542A95','#ACC7FE'],
							shapeTypes: ['rect','polygon'],
							totalShapes: 1
						},
						hide: {
							lettersAnimationOpts: {
								duration: () => anime.random(800,1000),
								delay: () => anime.random(0,80),
								easing: 'easeInOutExpo',
								opacity: 0,
								translateY: '300%',
								rotateZ: () => anime.random(-50,50)
							},
							shapesAnimationOpts: {
								duration: 350,
								easing: 'easeOutExpo',
								translateX: t => [t.dataset.tx,anime.random(-25,25)],
								translateY: t => [t.dataset.ty,anime.random(-25,25)],
								scale: 1,
								rotate: 0,
								opacity: {
									value: 0, 
									duration: 200, 
									easing: 'linear'
								}
							}
						},
						show: {
							lettersAnimationOpts: {
								duration: 800,
								delay: () => anime.random(0,75),
								easing: 'easeInOutExpo',
								opacity: [0,1],
								translateY: ['-300%','0%'],
								rotate: () => [anime.random(-50,50), 0]
							},
							shapesAnimationOpts: {
								duration: 2000,
								easing: 'easeOutExpo',
								translateY: t => {
									const ty = anime.random(-300,300);
									t.dataset.ty = ty;
									return [anime.random(-25,25),ty];
								},
								scale: t => {
									const s = randomBetween(1.5,2);
									t.dataset.s = s;
									return [s,s];
								},  
								rotate: () => anime.random(-45,45),
								opacity: {
									value: [0,0.9], 
									duration: 600,
									delay: 300,
									easing: 'linear'
								}
							}
						}
					}
				];

				class Slideshow {
					constructor(el) {
						this.DOM = {};
						this.DOM.el = el;
						this.DOM.slides = Array.from(this.DOM.el.querySelectorAll('.slide'));
						this.DOM.bgs = Array.from(this.DOM.el.querySelectorAll('.slide__bg'));
						this.DOM.words = Array.from(this.DOM.el.querySelectorAll('.word'));
						this.slidesTotal = this.DOM.slides.length;
						this.current = 0;
						this.words = [];
						this.DOM.words.forEach((word, pos) => {
							this.words.push(new Word(word, effects[pos].options));
						});
						
						this.isAnimating = true;
						this.words[this.current].show(effects[this.current].show).then(() => this.isAnimating = false);
					}
					show(direction) {
						if ( this.isAnimating ) return;
						this.isAnimating = true;
						
						let newPos;
						let currentPos = this.current;
						if ( direction === 'next' ) {
							newPos = currentPos < this.slidesTotal - 1 ? currentPos+1 : 0;
						}
						else if ( direction === 'prev' ) {
							newPos = currentPos > 0 ? currentPos-1 : this.slidesTotal - 1;
						}

						this.DOM.slides[newPos].style.opacity = 1;
						this.DOM.bgs[newPos].style.transform = 'none';
						anime({
							targets: this.DOM.bgs[currentPos],
							duration: 600,
							easing: [0.2,1,0.3,1],
							translateY: ['0%', direction === 'next' ? '-100%' : '100%'],
							complete: () => {
								this.DOM.slides[currentPos].classList.remove('slide--current');
								this.DOM.slides[currentPos].style.opacity = 0;
								this.DOM.slides[newPos].classList.add('slide--current');
								this.words[newPos].show(effects[newPos].show).then(() => this.isAnimating = false);
							}
						});

						this.words[newPos].hide();
						this.words[this.current].hide(effects[currentPos].hide).then(() => {
							
							this.current = newPos;
						});
					}
    			}

				const slideshow = new Slideshow(document.querySelector('.slideshow'));
				document.querySelector('.slidenav__item--prev').addEventListener('click', () => slideshow.show('prev') );
				document.querySelector('.slidenav__item--next').addEventListener('click', () => slideshow.show('next') );
				document.addEventListener('keydown', (ev) => {
					const keyCode = ev.keyCode || ev.which;
					if ( keyCode === 37 ) {
						slideshow.show('prev');
					}
					else if ( keyCode === 39 ) {
						slideshow.show('next');
					}
				});
			}
		</script>
        <meta name="description" content="Some SVG shape animations for fun letter effects" />
		<meta name="keywords" content="svg, animation, letter, word, shapes, javascript, animejs" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
		 @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @endif
@endsection
