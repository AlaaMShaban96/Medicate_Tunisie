@php
	App::setLocale(	Session::get('applocale'));
@endphp

@extends('layouts.master')

@section('head')


<title>Medicate Tunis : Your Health </title>
 
<link rel="stylesheet" href="{{ asset('css/pages/yourHealth.css')}}">
@endsection

@section('content')


<div class="content">

	<div id="img-content">
		<img id="cover" src="{{'img/pages/med1.jpeg'}}" alt="" >
	</div>

	<div id="your-health">
		<div id="your-health-titel">

			<h1>صحتك</h1>
		</div>
		<div id="your-health-info">

			<h1>ماهو برنامج صحتك ؟ </h1>
			<p>ابتكرنا برنامج صحتك الذي يوفر مجموعة من الخدمات المتميزة وغير المسبوقة لك ولعائلتك، سعياً منا لتوفير الرعاية الصحية الأفضل، لحياتكم الاجتماعية والعملية. بمجرد انضمامكم إلينا، ستحصلون تلقائياً وبدون رسوم إضافية على خدمات برنامج صحتك الذي سيكون رفيقكم الصحي أينما تكونوا وفي كل الأوقات. يمكنكم الاستفادة من برنامج صحتك بمجرد الاتصال بأطباء ميديكيت على الرقم ... أو من خلال تسجيل الدخول إلى صحتك ، بوابة خدماتنا الصحية. </p>
			<button> تسجيل الدخول</button>
		</div>
	</div>

	<div id="health-program-cover">
		<div id="health-program">
			<h1>برنامج صحتك</h1>
			<h4>اكتشف خدمات الصحية الحصرية من برنامج صحتك </h4>
		</div>

		<div id="health-program-items">
				<div  class="health-item" onclick="show(1)">
				
				
					<img  class="health-item-img" src="{{'img/pages/yourHealth/sehtk1.png'}}" alt="" >
					<h6>
						طبيب ميديكيت
					</h6>
				</div>

				<div  class="health-item" onclick="show(2)" >
					<img  class="health-item-img" src="{{'img/pages/yourHealth/sehtk2.png'}}" alt="" >
					<h6>
						رعاية الحمل و الامومة
					</h6>
				
				</div>

				<div  class="health-item" onclick="show(3)">
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

				<div  class="health-item" onclick="show(5)" >
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
					<img  src="{{'img/pages/yourHealth/sehtk-doctor.PNG'}}" alt="" >
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
					<img  src="{{'img/pages/yourHealth/doctora.jpg'}}" alt="" >
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
					<img  src="{{'img/pages/yourHealth/sehtk-doctor.PNG'}}" alt="" >
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
					<img  src="{{'img/pages/yourHealth/dwlia.jpg'}}" alt="" >
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
					<img  src="{{'img/pages/yourHealth/sehtk-doctor.PNG'}}" alt="" >
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
	
			<div class="content-collapsible">
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



@endsection

@section('script')
<script src="{{asset('js/pages/yourHealth.js')}}"></script>
@endsection