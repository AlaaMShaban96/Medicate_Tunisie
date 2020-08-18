@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')
@section('titel')
Your Health
@endsection
@section('head')

<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
 
<link rel="stylesheet" href="{{ asset('css/pages/yourHealth.css')}}">
@endsection

@section('content')

{{-- <input type="hidden" id="idscroll" value="{{$id}}"> --}}
<div class="content">

	<div id="img-content">
		<img id="cover" src="{{'img/pages/med1.png'}}" alt="" >
	</div>


	{{-- <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(img/pages/med1.png);">
				</div>
				<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
		  <div class="heading-section mb-5">
			  <div class="pl-md-5">
				  <span class="subheading mb-2">Welcome to Healthcare</span>
				<h2 class="mb-2">Hello! Health Care is a natural way of improving your health</h2>
			</div>
		  </div>
		  <div class="pl-md-5">
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<div class="founder d-flex align-items-center mt-5">
							<div class="img" style="background-image: url({{'img/pages/med1.png'}});"></div>
							<div class="text pl-3">
								<h3 class="mb-0">Cythia Hunter</h3>
								<span class="position">Personal Dietitian</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">

				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
					<div class="img" style="background-image: url(images/services-1.jpg);"></div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Exercise Program</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							<p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
						</div>
					</div>      
				</div>

				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
						<div class="img" style="background-image: url(images/services-2.jpg);"></div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Nutrition Plans</h3>
							<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
							<p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
						</div>
					</div>    
				</div>

				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
					<div class="img" style="background-image: url(images/services-3.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Diet Program</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
					</div>
					</div>      
				</div>
				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
					<div class="img" style="background-image: url(images/services-3.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Diet Program</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
					</div>
					</div>      
				</div>
				<div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
					<div class="d-block services-wrap text-center">
					<div class="img" style="background-image: url(images/services-3.jpg);"></div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Diet Program</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<p><a href="#" class="btn btn-primary btn-outline-primary">Read more</a></p>
					</div>
					</div>      
				</div>

        </div>
    	</div>
    </section> --}}


	<div id="your-health">
		<div id="your-health-titel">

			<h1>{{__('yourHealth.titel')}}</h1>
		</div>
		<div id="your-health-info" >

			<h1>{{__('yourHealth.whatThisProgramm')}} </h1>
			<p>
				{{__('yourHealth.sloution')}}
			 </p>
			{{-- <button type="button" class="btn btn-success bounceIn" data-toggle="modal" data-target="#loginModal" >{{__('yourHealth.joinUs')}}</button> --}}
		</div>
	</div>

	
		
	@switch(Session::get('applocale'))
		@case('ar')
				<div id="health-program-cover" class="x">
					<div id="health-program" >
						<h1>{{__('yourHealth.yourHealthprogrammer')}}</h1>
						<h4> {{__('yourHealth.findServeice')}}</h4>
					</div>
					
					<div id="health-program-items">
						@foreach ($categories as $category)
							<div  class="health-item " id="_doctor_medicit" onclick="show({{$category->id}})">
								<img  class="health-item-img" id="_doctor_medicit" src="{{asset($category->img_path)}}" alt="" >
								<h6>
									{{$category->name_ar}}
								</h6>
							</div>
						@endforeach
				
			
					</div>
				</div>

				<div id="health-program-content">
					@foreach ($categories as $category)
					<div id="item{{$category->id}}" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{asset($category->img_path)}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							@php
						echo( $category->item ==null? "": $category->item->description_ar  )
							@endphp
						</div>

					</div>
					@endforeach
					

					{{-- <div id="item2" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk2.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>رعاية الحمل والأمومة</h6>
							<b>هل تحصلين على الإرشاد الكافي لسلامة حملك وسلامة طفلك؟</b>
							<ul>
								<li>مقدمة من خلال طبيباتنا لضمان خصوصيتك</li>
								<li>لتطعيمات المنزلية لطفلك : سنقوم بتذكيرك عن مواعيد تطعيمات طفلك مع شرح نوعية التطعيم وما يمكن توقعه بعد التطعيم مع تقديم خدمة التطعيمات المنزلية.</li>
								<li>    تقديم الإرشاد قبل و بعد الولادة

									نقدّم لكِ الدعم والتوجيه من أجل تجربة حمل سليمة وحياة صحية لكِ ولطفلك. سوف تقدم طبيباتنا الإرشاد والإجابة على تساؤلاتك خلال هذه الفترة بالإضافة إلى توفير استشارات التغذية.</li>
							</ul>
							<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
						
						</div>

					</div>

					<div id="item3" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk3.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>رعاية الأمراض المزمنة</h6>
							<b>مرهق من التعامل مع المرض المزمن؟</b>
							<ul>
								<li>خدمة إعادة صرف الأدوية : احصل على خدمة إعادة صرف الأدوية دون الحاجة لمراجعة المستشفى من خلال شبكة واسعة من الصيدليات حول ليبيا</li>
								<li>خدمة توصيل الأدوية إلى المنزل : سنقوم بتوصيل أدوية حالتك المزمنة إلى منزلك</li>
								<li>    خدمة التحاليل المنزلية في المنزل أو العمل : سوف نقوم بإجراء فحص الدم الروتيني في منزلك أو عملك دون حاجتك لمراجعة مختبر المستشفى، وذلك في التاريخ والوقت المناسب لك، ثم سيتم إرسال نتائج التحاليل إليك خلال ٢٤ ساعة بالبريد الإلكتروني

									نساعدك على تخفيف آثار حالة مرضك المزمن والتعايش معه من خلال حلول صحية شخصية.</li>
							</ul>
							<b>توفر هذه الخدمة من قبل مقدمي رعاية صحية مرخصين من وزارة الصحة </b>
						</div>

					</div>
					<div id="item4" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk4.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>الخدمات الدولية المتخصصة</h6>
							<b>هل لديك حالة صحية معقدة وترغب برأي طبي دولي؟</b>
							<ul>
								<li>الاستشارات الدولية: بعض الحالات الصحية المعقدة تشعر معها بحاجتك إلى التأكد من التشخيص واختيار العلاج المناسب وفعاليته من الأطباء والخبراء العالميين في المراكز الدولية المتخصّصة. حرصاً منّا على تقديم أقصى درجات الرعاية الصحية وراحة البال لك، نقدّم خدمة "الاستشارات الدولية"، حيث سنقوم بالاستعانة بمشورة أفضل الأطباء من المراكز المتخصّصة حول العالم؛ لتحصل على التشخيص الأدق والعلاج الأمثل لحالتك. سيقوم أطباؤنا بمراجعة الحالات استناداً إلى المعايير المعتمدة لتقييم الحالات المعقدة.</li>
								<li>خدمة التطبيب عن بعد: تمنحك إمكانية التواصل مع أطباء حاصلين على البورد الأمريكي في أكثر من ١٤ تخصصاً طبياً، ضمن شبكة ضخمة من مقدمي خدمات الرعاية الصحية ‪،لتقدم استشاراتها  في العديد من المجالات كأمراض القلب، والأعصاب، و الجلدية، و الأورام، وغيرها الكثير وذلك عبر تطبيق ميديكيت أو شاشة الهاتف أو الحاسوب لتجعل الاستشارات الدولية لك ولأفراد عائلتك في متناول يدك وبالتالي توفر عليك الوقت والتكلفة وعناء السفر</li>
								
							</ul>
							<b>نساعدك في التعامل مع الحالات الصحية المعقدة حيث يتم التأكد من التشخيص عبر الأطباء والخبراء العالميين في المراكز الدولية المتخصّصة. </b>
						</div>

					</div>

					<div id="item5" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk5.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>خدمات الصحة واللياقة</h6>
							<b>هل تريد تبني أسلوب حياة أكثر صحة؟</b>
							<ul>
								<li>دعم التحكم بالتوتر : سلسلة من الجلسات الاستشارية الشخصية ذات الطابع السري، والتي تعقد لأعضائنا من قبل أحد أطباء ميديكيت النفسانيين المؤهلين. وذلك اعتماداً على نتائج تقييم المخاطر الصحية الخاصة بهم. وتهدف إلى مساعدة الأعضاء للتغلب على الضغوطات اليومية للحياة.</li>
								<li>توجيه الإقلاع عن التدخين : تم تصميم برنامج متخصص للإقلاع عن التدخين يعمل على توجيه أعضائنا للإقلاع عن عادة التدخين باستخدام تقنيات معتمدة عالمياً. ويلعب طبيب ميديكيت دورًا كبيراً في مساعدة الأعضاء على التغلب على آفة التدخين من خلال الجلسات المباشرة أو عبر الاستشارات الهاتفية.</li>
								<li>استشارات الرشاقة : بناء على نتائج تقييم المخاطر الصحية للعاملين، سيقوم أحد خبراء التغذية المؤهلين في ميديكيت بوضع خطط للتغذية معدة بشكل خاص تركز على مساعدة أعضائنا على تحقيق الوزن المثالي ومساعدتهم على اعتماد نظام غذائي صحي يأخذهم نحو أسلوب حياة أكثر صحة.</li>
							</ul>
							<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
						</div>

					</div>
					--}}
				</div>
			@break
		@case('en')
				<div id="health-program-cover" class="x">
					<div id="health-program" >
						<h1>{{__('yourHealth.yourHealthprogrammer')}}</h1>
						<h4> {{__('yourHealth.findServeice')}}</h4>
					</div>
					
					<div id="health-program-items">
						@foreach ($categories as $category)
							<div  class="health-item " id="_doctor_medicit" onclick="show({{$category->id}})">
								<img  class="health-item-img" id="_doctor_medicit" src="{{asset($category->img_path)}}" alt="" >
								<h6>
									{{$category->name_en}}
								</h6>
							</div>
						@endforeach
				
			
					</div>
				</div>

				<div id="health-program-content">
					@foreach ($categories as $category)
					<div id="item{{$category->id}}" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{asset($category->img_path)}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							@php
						echo( $category->item ==null? "": $category->item->description_en  )
							@endphp
						</div>

					</div>
					@endforeach
					

					{{-- <div id="item2" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk2.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>رعاية الحمل والأمومة</h6>
							<b>هل تحصلين على الإرشاد الكافي لسلامة حملك وسلامة طفلك؟</b>
							<ul>
								<li>مقدمة من خلال طبيباتنا لضمان خصوصيتك</li>
								<li>لتطعيمات المنزلية لطفلك : سنقوم بتذكيرك عن مواعيد تطعيمات طفلك مع شرح نوعية التطعيم وما يمكن توقعه بعد التطعيم مع تقديم خدمة التطعيمات المنزلية.</li>
								<li>    تقديم الإرشاد قبل و بعد الولادة

									نقدّم لكِ الدعم والتوجيه من أجل تجربة حمل سليمة وحياة صحية لكِ ولطفلك. سوف تقدم طبيباتنا الإرشاد والإجابة على تساؤلاتك خلال هذه الفترة بالإضافة إلى توفير استشارات التغذية.</li>
							</ul>
							<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
						
						</div>

					</div>

					<div id="item3" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk3.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>رعاية الأمراض المزمنة</h6>
							<b>مرهق من التعامل مع المرض المزمن؟</b>
							<ul>
								<li>خدمة إعادة صرف الأدوية : احصل على خدمة إعادة صرف الأدوية دون الحاجة لمراجعة المستشفى من خلال شبكة واسعة من الصيدليات حول ليبيا</li>
								<li>خدمة توصيل الأدوية إلى المنزل : سنقوم بتوصيل أدوية حالتك المزمنة إلى منزلك</li>
								<li>    خدمة التحاليل المنزلية في المنزل أو العمل : سوف نقوم بإجراء فحص الدم الروتيني في منزلك أو عملك دون حاجتك لمراجعة مختبر المستشفى، وذلك في التاريخ والوقت المناسب لك، ثم سيتم إرسال نتائج التحاليل إليك خلال ٢٤ ساعة بالبريد الإلكتروني

									نساعدك على تخفيف آثار حالة مرضك المزمن والتعايش معه من خلال حلول صحية شخصية.</li>
							</ul>
							<b>توفر هذه الخدمة من قبل مقدمي رعاية صحية مرخصين من وزارة الصحة </b>
						</div>

					</div>
					<div id="item4" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk4.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>الخدمات الدولية المتخصصة</h6>
							<b>هل لديك حالة صحية معقدة وترغب برأي طبي دولي؟</b>
							<ul>
								<li>الاستشارات الدولية: بعض الحالات الصحية المعقدة تشعر معها بحاجتك إلى التأكد من التشخيص واختيار العلاج المناسب وفعاليته من الأطباء والخبراء العالميين في المراكز الدولية المتخصّصة. حرصاً منّا على تقديم أقصى درجات الرعاية الصحية وراحة البال لك، نقدّم خدمة "الاستشارات الدولية"، حيث سنقوم بالاستعانة بمشورة أفضل الأطباء من المراكز المتخصّصة حول العالم؛ لتحصل على التشخيص الأدق والعلاج الأمثل لحالتك. سيقوم أطباؤنا بمراجعة الحالات استناداً إلى المعايير المعتمدة لتقييم الحالات المعقدة.</li>
								<li>خدمة التطبيب عن بعد: تمنحك إمكانية التواصل مع أطباء حاصلين على البورد الأمريكي في أكثر من ١٤ تخصصاً طبياً، ضمن شبكة ضخمة من مقدمي خدمات الرعاية الصحية ‪،لتقدم استشاراتها  في العديد من المجالات كأمراض القلب، والأعصاب، و الجلدية، و الأورام، وغيرها الكثير وذلك عبر تطبيق ميديكيت أو شاشة الهاتف أو الحاسوب لتجعل الاستشارات الدولية لك ولأفراد عائلتك في متناول يدك وبالتالي توفر عليك الوقت والتكلفة وعناء السفر</li>
								
							</ul>
							<b>نساعدك في التعامل مع الحالات الصحية المعقدة حيث يتم التأكد من التشخيص عبر الأطباء والخبراء العالميين في المراكز الدولية المتخصّصة. </b>
						</div>

					</div>

					<div id="item5" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk5.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>خدمات الصحة واللياقة</h6>
							<b>هل تريد تبني أسلوب حياة أكثر صحة؟</b>
							<ul>
								<li>دعم التحكم بالتوتر : سلسلة من الجلسات الاستشارية الشخصية ذات الطابع السري، والتي تعقد لأعضائنا من قبل أحد أطباء ميديكيت النفسانيين المؤهلين. وذلك اعتماداً على نتائج تقييم المخاطر الصحية الخاصة بهم. وتهدف إلى مساعدة الأعضاء للتغلب على الضغوطات اليومية للحياة.</li>
								<li>توجيه الإقلاع عن التدخين : تم تصميم برنامج متخصص للإقلاع عن التدخين يعمل على توجيه أعضائنا للإقلاع عن عادة التدخين باستخدام تقنيات معتمدة عالمياً. ويلعب طبيب ميديكيت دورًا كبيراً في مساعدة الأعضاء على التغلب على آفة التدخين من خلال الجلسات المباشرة أو عبر الاستشارات الهاتفية.</li>
								<li>استشارات الرشاقة : بناء على نتائج تقييم المخاطر الصحية للعاملين، سيقوم أحد خبراء التغذية المؤهلين في ميديكيت بوضع خطط للتغذية معدة بشكل خاص تركز على مساعدة أعضائنا على تحقيق الوزن المثالي ومساعدتهم على اعتماد نظام غذائي صحي يأخذهم نحو أسلوب حياة أكثر صحة.</li>
							</ul>
							<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
						</div>

					</div>
					--}}
				</div>
			@break
		@default
				<div id="health-program-cover" class="x">
					<div id="health-program" >
						<h1>{{__('yourHealth.yourHealthprogrammer')}}</h1>
						<h4> {{__('yourHealth.findServeice')}}</h4>
					</div>
					
					<div id="health-program-items">
						@foreach ($categories as $category)
							<div  class="health-item " id="_doctor_medicit" onclick="show({{$category->id}})">
								<img  class="health-item-img" id="_doctor_medicit" src="{{asset($category->img_path)}}" alt="" >
								<h6>
									{{$category->name_fr}}
								</h6>
							</div>
						@endforeach
				
			
					</div>
				</div>

				<div id="health-program-content">
					@foreach ($categories as $category)
					<div id="item{{$category->id}}" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{asset($category->img_path)}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							@php
						echo( $category->item ==null? "": $category->item->description_fr  )
							@endphp
						</div>

					</div>
					@endforeach
					

					{{-- <div id="item2" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk2.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>رعاية الحمل والأمومة</h6>
							<b>هل تحصلين على الإرشاد الكافي لسلامة حملك وسلامة طفلك؟</b>
							<ul>
								<li>مقدمة من خلال طبيباتنا لضمان خصوصيتك</li>
								<li>لتطعيمات المنزلية لطفلك : سنقوم بتذكيرك عن مواعيد تطعيمات طفلك مع شرح نوعية التطعيم وما يمكن توقعه بعد التطعيم مع تقديم خدمة التطعيمات المنزلية.</li>
								<li>    تقديم الإرشاد قبل و بعد الولادة

									نقدّم لكِ الدعم والتوجيه من أجل تجربة حمل سليمة وحياة صحية لكِ ولطفلك. سوف تقدم طبيباتنا الإرشاد والإجابة على تساؤلاتك خلال هذه الفترة بالإضافة إلى توفير استشارات التغذية.</li>
							</ul>
							<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
						
						</div>

					</div>

					<div id="item3" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk3.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>رعاية الأمراض المزمنة</h6>
							<b>مرهق من التعامل مع المرض المزمن؟</b>
							<ul>
								<li>خدمة إعادة صرف الأدوية : احصل على خدمة إعادة صرف الأدوية دون الحاجة لمراجعة المستشفى من خلال شبكة واسعة من الصيدليات حول ليبيا</li>
								<li>خدمة توصيل الأدوية إلى المنزل : سنقوم بتوصيل أدوية حالتك المزمنة إلى منزلك</li>
								<li>    خدمة التحاليل المنزلية في المنزل أو العمل : سوف نقوم بإجراء فحص الدم الروتيني في منزلك أو عملك دون حاجتك لمراجعة مختبر المستشفى، وذلك في التاريخ والوقت المناسب لك، ثم سيتم إرسال نتائج التحاليل إليك خلال ٢٤ ساعة بالبريد الإلكتروني

									نساعدك على تخفيف آثار حالة مرضك المزمن والتعايش معه من خلال حلول صحية شخصية.</li>
							</ul>
							<b>توفر هذه الخدمة من قبل مقدمي رعاية صحية مرخصين من وزارة الصحة </b>
						</div>

					</div>
					<div id="item4" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk4.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>الخدمات الدولية المتخصصة</h6>
							<b>هل لديك حالة صحية معقدة وترغب برأي طبي دولي؟</b>
							<ul>
								<li>الاستشارات الدولية: بعض الحالات الصحية المعقدة تشعر معها بحاجتك إلى التأكد من التشخيص واختيار العلاج المناسب وفعاليته من الأطباء والخبراء العالميين في المراكز الدولية المتخصّصة. حرصاً منّا على تقديم أقصى درجات الرعاية الصحية وراحة البال لك، نقدّم خدمة "الاستشارات الدولية"، حيث سنقوم بالاستعانة بمشورة أفضل الأطباء من المراكز المتخصّصة حول العالم؛ لتحصل على التشخيص الأدق والعلاج الأمثل لحالتك. سيقوم أطباؤنا بمراجعة الحالات استناداً إلى المعايير المعتمدة لتقييم الحالات المعقدة.</li>
								<li>خدمة التطبيب عن بعد: تمنحك إمكانية التواصل مع أطباء حاصلين على البورد الأمريكي في أكثر من ١٤ تخصصاً طبياً، ضمن شبكة ضخمة من مقدمي خدمات الرعاية الصحية ‪،لتقدم استشاراتها  في العديد من المجالات كأمراض القلب، والأعصاب، و الجلدية، و الأورام، وغيرها الكثير وذلك عبر تطبيق ميديكيت أو شاشة الهاتف أو الحاسوب لتجعل الاستشارات الدولية لك ولأفراد عائلتك في متناول يدك وبالتالي توفر عليك الوقت والتكلفة وعناء السفر</li>
								
							</ul>
							<b>نساعدك في التعامل مع الحالات الصحية المعقدة حيث يتم التأكد من التشخيص عبر الأطباء والخبراء العالميين في المراكز الدولية المتخصّصة. </b>
						</div>

					</div>

					<div id="item5" class="health-program-content-item">

						<div class="health-program-content-item-img">
							<img  src="{{'img/pages/yourHealth/sehtk5.png'}}" alt="" >
						</div>
						<div class="health-program-content-item-info">
							<h6>خدمات الصحة واللياقة</h6>
							<b>هل تريد تبني أسلوب حياة أكثر صحة؟</b>
							<ul>
								<li>دعم التحكم بالتوتر : سلسلة من الجلسات الاستشارية الشخصية ذات الطابع السري، والتي تعقد لأعضائنا من قبل أحد أطباء ميديكيت النفسانيين المؤهلين. وذلك اعتماداً على نتائج تقييم المخاطر الصحية الخاصة بهم. وتهدف إلى مساعدة الأعضاء للتغلب على الضغوطات اليومية للحياة.</li>
								<li>توجيه الإقلاع عن التدخين : تم تصميم برنامج متخصص للإقلاع عن التدخين يعمل على توجيه أعضائنا للإقلاع عن عادة التدخين باستخدام تقنيات معتمدة عالمياً. ويلعب طبيب ميديكيت دورًا كبيراً في مساعدة الأعضاء على التغلب على آفة التدخين من خلال الجلسات المباشرة أو عبر الاستشارات الهاتفية.</li>
								<li>استشارات الرشاقة : بناء على نتائج تقييم المخاطر الصحية للعاملين، سيقوم أحد خبراء التغذية المؤهلين في ميديكيت بوضع خطط للتغذية معدة بشكل خاص تركز على مساعدة أعضائنا على تحقيق الوزن المثالي ومساعدتهم على اعتماد نظام غذائي صحي يأخذهم نحو أسلوب حياة أكثر صحة.</li>
							</ul>>
							<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
						</div>

					</div>
					--}}
				</div>
	@endswitch
	

		
	<div id="collapsible">
		<h4> {{__('yourHealth.commonQuestions')}} </h4>

			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-1')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-1')}}
					</p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-2')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-2')}}
					</p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-3')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-3')}}
					</p>
				</div>
			</div>
			
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-4')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-4')}}
					</p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-5')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-5')}}
					</p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-6')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-6')}}
					</p>
				</div>
			</div>
			
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-7')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-7')}}
					</p>
				</div>
			</div>
			
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-8')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-8')}}
					</p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible"> {{__('yourHealth.question-9')}}</button>
				<div class="content-text">
					<p>
						{{__('yourHealth.solution-9')}}
					</p>
				</div>
			</div>
			
	</div>
</div>


















<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">
			{{-- <div class="tab-content-header"> --}}
			  <h3 style="color: white;margin-bottom: 9px;font-size: 25px;text-align: center;">
				{{-- {{__('_header._login')}} --}}
				نمودج طلب الحصول علي بطاقة Medicate
			  </h3>
  
			{{-- </div> --}}
		  </h5>
		 
		  </button>
		</div>
		<div class="modal-body">
			<div class="form-body">
				<div class="form-body">
				<form id="doctorRegForm" action="/ar/Index.php" name="doctorRegForm" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="md-form col-lg-3">
							<input placeholder="الاسم الاول" type="text" name="name1" id="name1" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="name1">
							الاسم الاول
							</label> --}}
						</div>

						<div class="md-form col-lg-3">
							<input placeholder="اسم الاب" type="text" name="name2" id="name2" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="name2">
							اسم الاب
							</label> --}}
						</div>


						<div class="md-form col-lg-3">
							<input placeholder="اسم الجد " type="text" name="name3" id="name3" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="name3">
							اسم الجد 
							</label> --}}
						</div>

						<div class="md-form col-lg-3">
							<input placeholder="اللقب" type="text" name="name4" id="name4" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="name4">
							اللقب
							</label> --}}
						</div>


					</div>


					<div class="row">

						<div class="md-form col-lg-6">
							<input placeholder="اسم الام بالكامل" type="text" name="mamname" id="mamname" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="mamname">
							اسم الام بالكامل
							</label> --}}
						</div>


						<div class="md-form col-lg-3" style="display: flex; width: 16%;">
						<!-- Default unchecked -->
							<div class="custom-control custom-radio" >
								<input type="radio" class="custom-control-input" value="ذكر" name="gender" id="g1" required="">
								<label class="custom-control-label" for="g1">ذكر</label>
							</div>
							<!-- Default checked -->
							<div class="custom-control custom-radio" style="margin-right: 13%;">
								<input type="radio" class="custom-control-input" value="أنثى" name="gender" id="g2" required="">
								<label class="custom-control-label" for="g2">أنثى</label>
							</div>
						</div>
						<div class="md-form col-lg-3">
							<input placeholder="الجنسية" type="text" name="genders" id="genders" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="genders" class="">
							الجنسية
							</label> --}}
						</div>
					</div>
					<div class="row">
						<div class="md-form col-lg-4">
							<label for="">
							تاريخ الميلاد
							</label>
							<input type="date" name="datebirth" value="2018-09-22" required="">
						</div>

						<div class="md-form col-lg-4">
							<input type="text" placeholder="مكان الميلاد" name="mbirth" id="mbirth" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.contactName" required="">
							{{-- <label for="mbirth">
							مكان الميلاد
							</label> --}}
						</div>

						<div class="md-form col-lg-4">

							<select class="form-control" id="hala" name="hala">
							<option>الحالة الاجتماعية</option>
							<option value="عازب">عازب </option>
							<option value="متزوج">متزوج</option>
							<option value="مطلق">مطلق </option>
							<option value="أرمل">أرمل</option>
							</select>

						</div>

					</div>

					<div class="row">

						<div class="md-form col-lg-4" style="display: flex; ">


							<label for="">حالة الاقامة
							</label> <br>

							<!-- Default unchecked -->
							<div class="custom-control custom-radio" style="margin-right: 8%;">
								<input type="radio" class="custom-control-input" id="eqama1" value="مقيم" name="eqama" required="">
								<label class="custom-control-label" for="eqama1">مقيم</label>
							</div>

							<!-- Default checked -->
							<div class="custom-control custom-radio" style="margin-right: 13%;">
								<input type="radio" class="custom-control-input" id="eqama2" value="غير مقيم" name="eqama" required="">
								<label class="custom-control-label" for="eqama2">غير مقيم</label>
							</div>

						</div>

						<div class="md-form col-lg-4">

							<select class="form-control" id="idname" name="idname">
							<option value="">إثبات هوية</option>
							<option value="بطاقة شخصية"> بطاقة شخصية</option>
							<option value="جواز سفر">جواز سفر</option>
							<option value="بطاقة إقامة">بطاقة إقامة </option>
							<option value="كتيب العائلة">كتيب العائلة</option>
							<option value="الرقم الوطني">الرقم الوطني</option>
							</select>

						</div>


						<div class="col-md-4">
							<div class="md-form">
								<input type="text" placeholder="رقم إثبات الهوية" name="idnumber" id="idnumber" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="doctor.businessLicenseNo" required=""> 
								{{-- <label for="idnumber" class="">رقم إثبات الهوية</label> --}}
							</div>
						</div>



					</div>

					<div class="row">

							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="العنوان" name="address" id="address" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="address" class="">
									العنوان
									</label> --}}
								</div>
							</div>



							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="	المدينة" name="city" id="city" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="city" class="">
									المدينة
									</label> --}}
								</div>
							</div>



							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="الدولة" name="country" id="country" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="country" class="">
									الدولة
									</label> --}}
								</div>
							</div>

							<div class="col-md-3">
								<div class="md-form">
									<input type="email" placeholder="البريد الالكتروني" name="email" id="email" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="email" class="">
									البريد الالكتروني
									</label> --}}
								</div>
							</div>	

					</div>

					<div class="row">

							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="الهاتف المحمول1" name="phone1" id="phone1" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="phone1" class="">
									الهاتف المحمول1
									</label> --}}
								</div>
							</div>



							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="الهاتف المحمول2" name="phone2" id="phone2" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="phone2" class="">
									الهاتف المحمول2
									</label> --}}
								</div>
							</div>



							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="نوع العمل" name="typejob" id="typejob" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="typejob" class="">
									نوع العمل
									</label> --}}
								</div>
							</div>

							<div class="col-md-3">
								<div class="md-form">
									<input type="text" placeholder="مكان العمل" name="mjob" id="mjob" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" data-ng-model="addressForm.address" required="">
									{{-- <label for="mjob" class="">
									مكان العمل
									</label> --}}
								</div>
							</div>	

							<div class="col-md-6">
														
								<div class="form-group">
									<span>الصورة الشخصية :</span>	
								<input type="file" name="attachment" class="form-control">
								</div>
							</div>

					</div>

					{{-- <div class="col-md-12">
						<div class="md-form">
						<div class="waves-input-wrapper waves-effect waves-light">
							<div class="waves-input-wrapper waves-effect waves-light">
								<input type="submit" name="send" value="إرسال" class="btn btn-block btn-danger">
							</div>
						</div>

					

						</div>
					</div> --}}


				</form>
				</div>
			</div>
  
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  <button type="button" class="btn btn-success" data-dismiss="modal">Send</button>
		  {{-- <button type="button" class="btn btn-success">Save changes</button> --}}
		</div>
	  </div>
	</div>
  </div>
<input type="hidden" class="class" value="{{$class}}">
@endsection

@section('script')
<script src="{{asset('js/pages/yourHealth.js')}}"></script>
<script>
// var myElement = document.getElementById('x');
// var topPos = myElement.offsetTop;
// document.getElementById('x').scrollTop = topPos;
$(function() {
	
var index=	$('.class').val();
$("#"+index).trigger('click');
console.log(index);

    var target = $('#'+index);
	
    if (target.length) {
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
		
		console.log(index);
		
        return false;
		
    }
	
});
</script>
@endsection