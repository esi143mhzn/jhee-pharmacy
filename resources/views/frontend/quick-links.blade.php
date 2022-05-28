@extends('frontend.layouts.app')
@section('content')
    <!-- banner-2 -->
	<div class="page-head_agile_info_w3l"></div>
	<!-- //banner-2 -->

    @if(request()->segment(1) == "faqs")
        <!-- page -->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <i>|</i>
                        </li>
                        <li>Faqs</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //page -->
        <!-- FAQ-help-page -->
        <div class="faqs-w3l">
            <div class="container">
                <!-- tittle heading -->
                <h3 class="tittle-w3l">Faqs
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </h3>
                <!-- //tittle heading -->
                <h3 class="w3-head">Top 10 Frequently asked questions</h3>
                <div class="faq-w3agile">
                    <ul class="faq">
                        <li class="item1">
                            <a href="#" title="click here">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item2">
                            <a href="#" title="click here">The standard Lorem Ipsum passage Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item3">
                            <a href="#" title="click here">Consectetuer adipiscing elit Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Dincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item4">
                            <a href="#" title="click here">Sed diam nonummy nibh euismod Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item5">
                            <a href="#" title="click here">Euismod tincidunt laoreet Etiam faucibus viverra libero vel efficitur ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item6">
                            <a href="#" title="click here">Voluptas sit aspernatur aut Ut semper nisl ut laoreet ultrices ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item7">
                            <a href="#" title="click here">Donec ut quam ligula feugiat Ut semper nisl ut laoreet ultrices ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item8">
                            <a href="#" title="click here">The standard Lorem Ipsum Ut semper nisl ut laoreet ultrices passage ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Lorem ipsum dolor sit amet At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item9">
                            <a href="#" title="click here">Consectetuer adipiscing Ut semper nisl ut laoreet ultrices elit ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Lorem ipsum dolor sit amet At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item10">
                            <a href="#" title="click here">Sed diam nonummy Ut semper nisl ut laoreet ultrices nibh euismod ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                                        et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //FAQ-help-page -->
    @elseif(request()->segment(1) == "help")
        <!-- page -->
        <div class="services-breadcrumb">
            <div class="agile_inner_breadcrumb">
                <div class="container">
                    <ul class="w3_short">
                        <li>
                            <a href="index.html">Home</a>
                            <i>|</i>
                        </li>
                        <li>Help</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //page -->
        <!-- FAQ-help-page -->
        <div class="faqs-w3l">
            <div class="container">
                <!-- tittle heading -->
                <h3 class="tittle-w3l">Help
                    <span class="heading-style">
                        <i></i>
                        <i></i>
                        <i></i>
                    </span>
                </h3>
                <!-- //tittle heading -->
                <div class="wthree-help">
                    <div class="col-xs-7 agile-left-help">
                        <h3 class="w3-head">How Can We help you</h3>
                        <form action="#" method="get">
                            <textarea placeholder="Your Query" name="Message" required=""></textarea>
                            <input type="submit" value="Submit">
                        </form>
                        <h5>OR</h5>
                        <a href="contact.html">Contact Us</a>
                    </div>
                    <div class="col-xs-5 agile-right-help">
                        <img src="images/contact2.jpg" alt=" ">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="faq-w3agile">
                    <h5>Top 10 Frequently asked questions</h5>
                    <ul class="faq">
                        <li class="item1">
                            <a href="#" title="click here">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor vehicula ipsum nec ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
                                        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item2">
                            <a href="#" title="click here">The standard Lorem Ipsum passage Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p> Tincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item3">
                            <a href="#" title="click here">Consectetuer adipiscing elit Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Dincidunt ut laoreet dolore At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item4">
                            <a href="#" title="click here">Sed diam nonummy nibh euismod Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item5">
                            <a href="#" title="click here">Euismod tincidunt laoreet Etiam faucibus viverra libero vel efficitur ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item6">
                            <a href="#" title="click here">Voluptas sit aspernatur aut Ut semper nisl ut laoreet ultrices ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item7">
                            <a href="#" title="click here">Donec ut quam ligula feugiat Ut semper nisl ut laoreet ultrices ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer
                                        adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item8">
                            <a href="#" title="click here">The standard Lorem Ipsum Ut semper nisl ut laoreet ultrices passage ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Lorem ipsum dolor sit amet At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item9">
                            <a href="#" title="click here">Consectetuer adipiscing Ut semper nisl ut laoreet ultrices elit ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Lorem ipsum dolor sit amet At vero eos et Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                                        cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                        <li class="item10">
                            <a href="#" title="click here">Sed diam nonummy Ut semper nisl ut laoreet ultrices nibh euismod ?</a>
                            <ul>
                                <li class="subitem1">
                                    <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                        accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                                        et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- //FAQ-help-page -->
    @elseif(request()->segment(1) == "privacy-policy")
        <!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Privacy Policy</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Terms of use-section -->
	<section class="terms-of-use">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Privacy Policy
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<h6>Privacy Policy</h6>
				<p>We value the trust you place in us. That's why we insist upon the highest standards for secure transactions and customer
					information privacy. Please read the following statement to learn about our information gathering and dissemination
					practices.
				</p>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
					modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

				<h6>Personally Identifiable Information and other Information</h6>
				<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
					middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
				<p>first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
					sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
					from repetition, injected humour</p>

				<h6>Security Precautions</h6>
				<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
					by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
					first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
					a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
					Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</p>

				<h6>What Information Can I Access?</h6>
				<p> Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
					Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				<p> Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
					generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

				<h6> Advertisements on Grocery Shoppy</h6>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
					by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
					of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
					generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
					Internet.
				</p>

				<h6>Your Consent</h6>
				<ol start="1">
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
						voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
				</ol>
				<h6>Policy updates</h6>
				<p> you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
					the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It
					uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures</p>
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
    @elseif(request()->segment(1) == "terms-of-use")
        <!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Terms of Use</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Terms of use-section -->
	<section class="terms-of-use">
		<!-- terms -->
		<div class="terms">
			<div class="container">
				<!-- tittle heading -->
				<h3 class="tittle-w3l">Terms of Use
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
				<!-- //tittle heading -->
				<h5>PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY .</h5>
				<h6>Personal Information</h6>
				<ol start="1">
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
						voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
				</ol>

				<h6>License & Site access</h6>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
					ratione voluptatem sequi nesciunt..</p>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
					modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
				<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
					ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

				<h6>Eligibility :</h6>
				<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
					middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
				<p>first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model
					sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
					from repetition, injected humour</p>

				<h6>Account & Registration</h6>
				<p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
					by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
					first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
					a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
					Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</p>
				<p>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
					"Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				<h6>Cancellation by Site / Customer</h6>
				<p> Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
					Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				<p> Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
					generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
				<h6>You Agree and Confirm</h6>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
					by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
					of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
					generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
					Internet.
				</p>
				<h6>Copyright & Trademark</h6>
				<p> you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
					the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It
					uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures</p>
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
    @endif
    

@endsection
