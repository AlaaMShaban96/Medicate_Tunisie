@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')


<title>Medicate Tunis : Your Health </title>
 
<link rel="stylesheet" href="{{ asset('css/pages/yourHealth.css')}}">
@endsection

@section('content')

{{-- <input type="hidden" id="idscroll" value="{{$id}}"> --}}
<div class="content">

	<div id="img-content">
		<img id="cover" src="{{'img/pages/med1.png'}}" alt="" >
	</div>

	<div id="your-health">
		<div id="your-health-titel">

			<h1>صحتكم</h1>
		</div>
		<div id="your-health-info" >

			<h1>ماهو برنامج صحتك ؟ </h1>
			<p>ابتكرنا برنامج صحتك الذي يوفر مجموعة من الخدمات المتميزة وغير المسبوقة لك ولعائلتك، سعياً منا لتوفير الرعاية الصحية الأفضل، لحياتكم الاجتماعية والعملية. بمجرد انضمامكم إلينا، ستحصلون تلقائياً وبدون رسوم إضافية على خدمات برنامج صحتك الذي سيكون رفيقكم الصحي أينما تكونوا وفي كل الأوقات. يمكنكم الاستفادة من برنامج صحتك بمجرد الاتصال بأطباء ميديكيت على الرقم ... أو من خلال تسجيل الدخول إلى صحتك ، بوابة خدماتنا الصحية. </p>
			<button type="button"  class=" bounceIn" data-toggle="modal" data-target="#loginModal" > تسجيل الدخول</button>
		</div>
	</div>

	<div id="health-program-cover" class="x">
		<div id="health-program" >
			<h1>برنامج صحتك</h1>
			<h4>اكتشف خدمات الصحية الحصرية من برنامج صحتك </h4>
		</div>
 
		<div id="health-program-items">
				<div  class="health-item " id="_pregnancy_and_motherhood" onclick="show(1)">
				
				
					<img  class="health-item-img" id="_doctor_medicit" src="{{'img/pages/yourHealth/sehtk1.png'}}" alt="" >
					<h6>
						طبيب ميديكيت
					</h6>
				</div>

				<div  class="health-item " id="_pregnancy_and_motherhood" onclick="show(2)" >
					<img  class="health-item-img" src="{{'img/pages/yourHealth/sehtk2.png'}}" alt="" >
					<h6>
						رعاية الحمل و الامومة
					</h6>
				
				</div>

				<div  class="health-item" id="_card_international" onclick="show(3)">
					<img  class="health-item-img" src="{{'img/pages/yourHealth/sehtk3.png'}}" alt="" >
					<h6>
						رعاية الأمراض المزمنة
					</h6>
				
				</div>

				<div  class="health-item" onclick="show(4)">
					<img  class="health-item-img" src="{{'img/pages/yourHealth/sehtk4.png'}}" alt="" >
					<h6>
						الخدمات الدولية المتخصصة
					</h6>
				
				</div>

				<div  class="health-item" id="_health_and_fitness" onclick="show(5)" >
					<img  class="health-item-img" src="{{'img/pages/yourHealth/sehtk5.png'}}" alt="" >
					<h6>
						خدمة الصحة و اللياقة
					</h6>
				
				</div>

			</div>
		</div>
		
		<div id="health-program-content">
			<div id="item1" class="health-program-content-item">

				<div class="health-program-content-item-img">
					<img  src="{{'img/pages/yourHealth/sehtk1.png'}}" alt="" >
				</div>
				<div class="health-program-content-item-info">
					<h6>طبيب ميديكيت </h6>
					<b>هل لديك الكثير من الاسئلة عن صحتك ؟</b>
					<ul>
						<li>متوفرة من خلال طبيباتنا وأطبائنا</li>
						<li>متوفرة من خلال طبيباتنا وأطبائنا</li>
						<li>متوفرة من خلال طبيباتنا وأطبائنا</li>
					</ul>
					<b>احصل علي النصح والإرشاد إضافة إلى الاجابة على مختلف تساؤلاتك الصحية من خلال الرقم أو دردش مع أحد أطبائنا </b>
				</div>

			</div>

			<div id="item2" class="health-program-content-item">

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
			
	</div>

		
	<div id="collapsible">
		<h4>الأسئلة الشائعة عن برنامج صحتك </h4>

			<div class="content-collapsible">
				<button type="button" class="collapsible">ماهو برنامج صحتك ؟</button>
				<div class="content-text">
					<p>هو برنامج يوفر مجموعة من الخدمات المتميزة لك ولعائلتك، سعياً منا في توفير الرعاية الصحية الأفضل، لتكونوا فعالين في حياتكم الاجتماعية والعملية. </p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible">كيف يمكنني الاستفادة من برنامج صحتك؟</button>
				<div class="content-text">
				
						<p>يمكنك الاستفادة من البرنامج بالاتصال على الرقم المجاني , و سوف نقدم لك الخدمات الملائمة لاحتياجاتك الصحية. </p>
					
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible">أنا بحاجة إلى طبيب ميديكيت لزيارتي لتقديم الاستشارة المنزلية، هل هذا ممكن؟</button>
				<div class="content-text">
					<p>لا يقدم أطباء ميديكيت أي استشارات منزلية. ولكن يمكنك الحصول على الخدمات الصحية من خلال خدمة "طبيب ميديكيت" من طبتم بالاتصال على الرقم </p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible">هل يمكنني حجز موعد للفحوصات من خلال برنامج صحتك؟</button>
				<div class="content-text">
					<p>لا يقوم طبيب مديكيت بإجراء فحوصات طبية، ولكن نوفر خدمات التحاليل المنزلية وإعادة صرف وتوصيل الأدوية إذا كنت تعاني من مرض مزمن. </p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible">من الذي سيعطي طفلي تطعيماته؟</button>
				<div class="content-text">
					<p>ستقوم ممرضة من إحدى المستشفيات المرخصة بإعطاء طفلك التطعيمات المنزلية في اليوم والوقت المناسب لك. </p>
				</div>
			</div>
	
			<div class="content-collapsible">
				<button type="button" class="collapsible">هل خدمة التحاليل المنزلية متوفرة لمن لا يعاني من أمراض مزمنة؟</button>
				<div class="content-text">
					<p>لا، هذه الخدمة متوفرة فقط لمن يعانون من مرض مزمن وذلك لمساعدتهم في متابعة حالتهم الصحية.  </p>
				</div>
			</div>

			<div class="content-collapsible">
				<button type="button" class="collapsible">ما هي الجهات التي توفر خدمة اعادة صرف الأدوية وما دورها؟</button>
				<div class="content-text">
					<p>ستقوم إحدى شركاء ميديكيت المرخصة من وزارة الصحة التواصل لمراجعة علاجاتك ومن ثم إرسال الموافقة إلى أقرب صيدلية لإعادة صرف أدويتك </p>
				</div>
			</div>
	
			<div  class="content-collapsible">
				<button type="button" class="collapsible">ماهي تخصصات أطباء صحتك؟</button>
				<div class="content-text">
					<p>أطباء ميديكيت أطباء طب عام.  </p>
				</div>
			</div>
			<div class="content-collapsible">
				<button type="button" class="collapsible">هل يمكنني تقديم شكوى على مقدم الخدمة أو الطبيب المعالج عن طريق برنامج صحتك؟</button>
				<div class="content-text">
					<p>لا يستطيع برنامج صحتك مساعدتكم في ذلك. فضلاً اتصل بخدمة العملاء على المساعدة.   </p>
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

console.log(index);

    var target = $('#'+index);
    if (target.length) {
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
		console.log(index);
		
        return false;
		
    }
	document.getElementById(index).click();
});
</script>
@endsection