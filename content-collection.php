<style>
/* Relative positioning*/
.map {
	position: relative;
}

/* Hide the original tooltips contents */
.pin {
	display: none;
}

/* Begin styling the tooltips and pins */
.tooltip-up, .tooltip-down {
	position: absolute;
	background: black;
	width: 36px;
	height: 52px;
}

.tooltip-down {
	background-position: 0 -52px;
}

.tooltip {
	display: none;
	width: 200px;
	cursor: help;
	text-shadow: 0 1px 0 #fff;
	position: absolute;
	top: 10px;
	left: 50%;
	z-index: 999;
	margin-left: -115px;
	padding:15px;
	color: #222;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	-moz-box-shadow: 0 3px 0 rgba(0,0,0,.7);
	-webkit-box-shadow: 0 3px 0 rgba(0,0,0,.7);
	box-shadow: 0 3px 0 rgba(0,0,0,.7);
	background: #fff1d3;
	background: -webkit-gradient(linear, left top, left bottom, from(#fff1d3), to(#ffdb90));
	background: -webkit-linear-gradient(top, #fff1d3, #ffdb90);
	background: -moz-linear-gradient(top, #fff1d3, #ffdb90);
	background: -ms-linear-gradient(top, #fff1d3, #ffdb90);
	background: -o-linear-gradient(top, #fff1d3, #ffdb90);
	background: linear-gradient(top, #fff1d3, #ffdb90);			
}

.tooltip::after {
	content: '';
	position: absolute;
	top: -10px;
	left: 50%;
	margin-left: -10px;
	border-bottom: 10px solid #fff1d3;
	border-left: 10px solid transparent;
	border-right :10px solid transparent;
}

.tooltip-down .tooltip {
	bottom: 12px;
	top: auto;
}

.tooltip-down .tooltip::after {
	bottom: -10px;
	top: auto;
	border-bottom: 0;
	border-top: 10px solid #ffdb90;
}

.tooltip h2 {
	font: bold 1.3em 'Trebuchet MS', Tahoma, Arial;
	margin: 0 0 10px;
}

.tooltip ul {
	margin: 0;
	padding: 0;
	list-style: none;
}		
</style>

<img width="920" height="450" src="world-map.jpg" alt="World continents">
<?php if( get_field('item') ): ?>
<?php while( has_sub_field('item') ): ?>

    <div class="pin <?php the_slug();?>" data-xpos="<?php the_sub_field('x-position'); ?>" data-ypos="<?php the_sub_field('y-position'); ?>">
        <h3><?php the_sub_field('name'); ?></h3>
    </div><!--.pin-->

<?php endwhile; ?>

<?php endif; ?>