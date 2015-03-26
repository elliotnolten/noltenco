<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
            	<div id="intro">
					<?php if (have_posts()) : $full_post = get_option('full_post'); while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; else: ?>
                         <p><h1 style="float:left;"><?php _e('Sorry, no posts matched your criteria.'); ?></h1></p>
                    <?php endif; ?>                   
                </div><!--#intro--> 
                <div id="info">
                	<img src="<?php echo get_bloginfo('template_url'); ?>/images/profile-pic.jpg" title="profile-pic" alt="profile-pic"/>
                    <div id="instafeed">
                    	<h3>Instagram feed</h3>
                		<?php echo do_shortcode('[instapress piccount="18" instapress userid="elliotn" effect="fancybox" size="73" title="1"]'); ?>
                	</div><!--#instafeed-->
                </div><!--#info-->
                <div id="work-exp">
                  <h3 class="info-title">WORK EXPERIENCE + INTERNSHIPS</h3>
                <table>
                  <tr class="header">
                    <th class="what">what</th>
                    <th class="where">where</th>
                    <th class="when">when</th>
                  </tr>
                  <tr>
                    <td class="what">product/graphic/web design | brand identity | product visualizations | on-/offline campaigns</td>
                    <td class="where"><a href="http://elliotnolten.com" title="elliotnolten.com" target="_blank">elliotnolten.com</a></td>
                    <td class="when">January 2010 to present</td>
                  </tr>
                  <tr>
                    <td class="what">project management | product/graphic design</td>
                    <td class="where"><a href="http://www.my-joolz.com/" target="_blank" title="go to Milk Design B.V.">Milk Design B.V. Amsterdam</a></td>
                    <td class="when">May 2010 to December 2010</td>
                  </tr>
                  <tr>
                    <td class="what">project management | concept development | cross-media design | UX and interaction design | graphic design | web design</td>
                    <td class="where"><a href="http://www.knalgeel.nl/" target="_blank" title="go to KNALGEEL">KNALGEEL productontwerp</a></td>
                    <td class="when">September 2009 to December 2009</td>
                  </tr>
                  <!--<tr>
					<td class="what">Student assistent second year's course 'Modelleren'</td>
                    <td class="where"><a href="http://www.io.tudelft.nl/" target="_blank" title="go to IDE TUDelft">Delft University of Technology, Fac. Industrial Design Engineering, Dpt. Design Engineering</a></td>
                    <td class="when">April 2009 to August 2009</td>
                  </tr>
                  <tr>
					<td class="what">Committee member of the Yearbook Committee 07/08 | secretary of external affairs</td>
                    <td class="where"><a href="http://www.id.tudelft.nl/" target="_blank" title="go to id">Study association i.d at the faculty of Industrial Design Engineering</a></td>
                    <td class="when">February 2008 to January 2009</td>
                  </tr>
                  <tr>
					<td class="what">Mentor for computer courses for primary school children</td>
                    <td class="where"><a href="http://www.denieuweacademie.nl/" target="_blank" title="go to de nieuwe academie">De Nieuwe Academie</a></td>
                    <td class="when">April 2006 to June 2008</td>
                  </tr>  
                  <tr>
                  <tr>
					<td class="what">Field researcher</td>
                    <td class="where"><a href="http://www.summitgroup.nl/nieuw/" target="_blank" title="go to Probit Onderzoek en Advies">Probit Onderzoek en Advies (Market Research)</a></td>
                    <td class="when">October 2007 to November 2007</td>
                  </tr>  
                  <tr>
					<td class="what">Promotion team Industrial Design Engineering
                    <td class="where"><a href="http://www.io.tudelft.nl/" target="_blank" title="go to IDE TUDelft">Delft University of Technology, Fac. Industrial Design Engineering, Dpt. Marketing & Communication</a></td>
                    <td class="when">October 2006 to November 2007</td>
                  </tr>                 --> 
                </table>
                </div>
                
                <div id="education">
                  <h3 class="info-title">EDUCATION</h3>
                <table>
                  <tr class="header">
                    <th class="what">what</th>
                    <th class="where">where</th>
                    <th class="when">when</th>
                  </tr>
                  <tr>
                    <td class="what">Master Integrated Product Design (graduated 2010)</td>
                    <td class="where"><a href="http://www.tudelft.nl/live/pagina.jsp?id=2515f356-b6b8-43dd-8787-7a142d972092&lang=en" target="_blank" title="go to Master Integrated Product Design">Fac. Industrial Design Engineering, Delft University of Technology</a></td>
                    <td class="when">February 2008 to December 2010</td>
                  </tr>
                  <tr>
					<td class="what">Bachelor Industrieel Ontwerpen (finished)</td>
                    <td class="where"><a href="http://www.tudelft.nl/live/pagina.jsp?id=029b06f2-85eb-4500-bad2-79435dab8207&lang=nl" target="_blank" title="go to Bachelor Industrieel Ontwerpen">Fac. Industrial Design Engineering, Delft University of Technology</a></td>
                    <td class="when">September 2004 to February 2008</td>
                  </tr>                 
                </table>
                </div>
                
                <div id="tools">
                     <h3 class="info-title">SKILLS + TOOLS</h3>
                   <div class="tools1">
                    <div class="macbook"><img src="<?php echo get_bloginfo('template_url'); ?>/images/macbook-pro-15.png" alt="macbook-pro-15"/><p>Macbook Pro 15 inch</p></div>
                    <div class="tool-ai"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-ai.png" alt="tool-ai"/><p>Adobe Illustrator</p></div>
                    <div class="tool-ps"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-ps.png" alt="tool-ps"/><p>Adobe Photoshop</p></div>
                    <div class="tool-fl"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-fl.png" alt="tool-fl"/><p>Adobe Flash</p></div>
                    <div class="tool-dw"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-id.png" alt="tool-id"/><p>Adobe InDesign</p></div>
                   </div>
                   <div class="tools2">	
                    <div class="tools-a">
                      <p><a href="http://www.solidworks.com/" title="SolidWorks" target="_blank">SolidWorks</a></p>
                      <p><a href="http://usa.autodesk.com/maya/" title="Autodesk Maya" target="_blank">Autodesk Maya</a></p>
                      <p>Corel Painter</p>
                    </div>
                    <div class="tools-plus"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-plus.png" alt="tool-plus"/></div>
                   	<div class="tools-b">
                      <p><a href="http://macrabbit.com/espresso/" title="Espresso" target="_blank">Espresso</a></p>
                      <p>HTML, CSS, <a href="http://codex.wordpress.org/" title="Wordpress" target="_blank">Wordpress</a></p>
                      <p>Actionscript 3.0</p>
                    </div>
                   </div>
                   <div class="tools3">
                   	<div class="tool-pencils"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-pencils.png" alt="tool-pencils"/><p>pencils</p></div>
                    <div class="tools-plus"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-plus.png" alt="tool-plus"/></div>
                    <div class="tool-tri"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-tri.png" alt="tool-tri"/><p>ruler</p></div>
                    <div class="tools-plus"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-plus.png" alt="tool-plus"/></div>
                    <div class="tool-intuos"><img src="<?php echo get_bloginfo('template_url'); ?>/images/tool-intuos.png" alt="tool-intuos"/><p>Wacom Intuos4 L</p></div>
                   </div>           
              	</div>
<?php get_footer(); ?>