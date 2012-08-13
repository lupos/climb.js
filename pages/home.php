<div id="main-container">
	<div id="main" class="wrapper clearfix">
		<!--<div class="colorBlock primary"></div>
		<div class="colorBlock secondary"></div>
		<div class="colorBlock tertiary"></div>
		<div class="colorBlock quadrary"></div>-->
		<article>
			<section id="description">
				<h1>description</h1>
				<p>Climb.js is a very simple little plugin that adds a "much" requested DOM traversal technique. There have been many times over the years where I have needed to "climb" up the DOM a few levels. Image galleries and swatches are common culprits. Find the button, climb up to a certain container level, "find" the target. The <a href="http://api.jquery.com/parent/">.parent()</a> function works fine for this. You can pass in a target class/ID/element but on the occasion that the shared container element doesn't have a distinct identifier you may find something like:</p>
				<pre class="language-javascript">$(this).parent().parent().parent().parent().find('#target')"</pre>
				<p>It's not pretty.</p>
				<p>I went serching figuring I there was probably a function to go up a certain number of levels but I found the same thing you probably did. A lot of people looking for it over in the <a href="http://api.jquery.com/parent/">.parent()</a> pages comments. One work around is to call ".parents().eq(3)" but the thing we all love about jQuery is clean chainable code.</p>
				<pre  class="language-javascript">
					$(this).climb(3).find("#target");
				</pre>
				<p>Sexy! Now that is what I am talking about. This may not be a valuable enough function to go and include in every project you do but I have had many instances when making plugins where this is just what the doctor ordered. Most recently I was whipping up a plugin for managing product color swatches. The problem was multiple devs where working on different views throughout the site that all have very different layouts. This lead to vastly different HTML structure. Thanks to climb.js my other plugin swatches.js is able to accept either a container class/id/element or a number of levels to climb making it flexible to work on every page. This gives us very consistent behavior across the board and nice clean code on the back end so I can sleep at night.</p>
			</section>
			<section id="usage">
				<h1>usage</h1>
				<p>Currently .climb() supports positive and negative numbers. Positive numbers climb up the DOM, negatives go down. I'm unsure as to weather or not I want to leave the negative support in because every element only has 1 parent but can have an infinite amount of children. Currently it will climb down first children. I may experiment with allowing a second option to be passed in that's just a coma seperated list of numbers. I doubt there are many (if any at all) practical applications for such a feature. Not to mention it would dramaticaly increase the size of the plugin (which is tiny at the moment). Plus it would make for much less attractive code:</p>
				<pre class="language-javascript">
					$(this).climb(-8, {children : '1,4,2,6,5,4,7,2'});
				</pre>
				<p>This could be some what aleviated with the following syntax:</p>
				<pre class="language-javascript">
					var childrenList = {children : '1,4,2,6,5,4,7,2'};

					$(this).climb(-8, childrenList);
				</pre>
			</section>
			<section id="demos">
				<h1>demos</h1>
				<div class="alert-message block-message warning">
					<div class="demo-buttonContainer">
						<button class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
							<span class="ui-buton-text">CHANGE IMAGE</span>
						</button>
					</div>
				</div>
				<div class="alert-message block-message warning">
					<div class="demo-image-container">
						<img src="images/html5.png">
					</div>
				</div>
				<div class="alert-message block-message warning">
					<div class="demo-code-container">
						<a class="noSelect">show code</a>
						<div class="code">
							<pre class="language-javascript">
var target, 
	curImg, 
	setCurImg; 

//find the img we are targeting with climb()
target = $('#demos button').climb(3).find('img'); 

//function to set src of current image
setCurImg = function(){
	curImg = target.attr('src');
}
setCurImg();

$('#demos button').click(function(){
	if(curImg === 'images/html5.png'){
		target.attr('src', 'images/jquery.png');
		setCurImg(); //update curImg
	} else {
		target.attr('src', 'images/html5.png');
		setCurImg(); //update curImg
	}
});
							</pre>
						</div>
					</div>
				</div>
				<script>
				</script>
			</section>
		</article>
		
		<aside>
			<h3>The end of traditional jQuery familes</h3>
			<p>Multiple parents are dead: <br /><del>.parent().parent().parent()</del></p>
			<p>Long Live: <br />.climb(3)</p>
		</aside>
		
	</div> <!-- #main -->
</div> <!-- #main-container -->