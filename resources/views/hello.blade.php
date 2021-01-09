@extends('layout')

@section('content')
@if(count($tovars))
@foreach($tovars as $tovar)
<div class="tovar" idk="1" id="t25"><div class="row myrow">
 <a class="point" idt="{{$tovar->id}}"><div class="name">{{ $tovar->name}}</div></a>
 <div class="opisanie">
 <div class="thumb-img"><img src="http://cdn2.s.kolorado.ru/products/4/40/406/40695/108_1_8_zoom.png" class="lazyImg" data-original="http://cdn2.s.kolorado.ru/products/4/40/406/40695/108_1_8_zoom.png" style="display: inline;">
 <span style="visibility:hidden;"></span></div>
 <p>{{$tovar->opisa}}</p></div>
		<div class="social text-right"><span class="sena"><font>цена:</font>{{$tovar->sena}}<span></span></span></div>
		<div class="social"><div class="socialg" data-url="http://pg.kg/?idt=25" data-title="поделиться в социальных сетях">
		<ul class="share_nav">
			<li><a class="push facebook share-a" data-id="fb"><img src="./icons/facebook.png" title="facebook"></a></li>
			<li><a class="push twitter share-a" data-id="tw"><img src="./icons/twitter.png" title="Twiiter"></a></li>
			<li><a class="push vkontakte share-a" data-id="vk"><img src="./icons/vk.png" title="Vk"></a></li>
			<li><a class="push ok share-a" data-id="ok"><img src="./icons/ok.png" title="OK"></a></li>
<li><a class="push google share-a" data-id="gp"><img src="./icons/gpluse.png" title="Google+"></a></li>
			<li><a class="push whats share-a" href="https://api.whatsapp.com/send?text=http://abbada.kg/?idt=25">
		<img src="./icons/whatsapp.png" title="Whatsapp"></a></li></ul></div>
				<!-- /////////////obmanka -->
				<div class="socialgh">
            <ul class="share_nav">
			<li><a class="push ok share-a"><img src="./icons/ok.png"></a></li>
				<li><a class="push ok share-a"><img src="./icons/ok.png"></a></li>
				<li><a class="push ok share-a"><img src="./icons/vk.png"></a></li>
				<li><a class="push ok share-a"><img src="./icons/ok.png"></a></li>
				<li><a class="push ok share-a"><img src="./icons/ok.png"></a></li>
				</ul>
		<!--//////////obmanka	-->
				</div></div>
		<div class="hrefrow"> <div class="row">
			<a class="sol_hr" href="http://abbada.kg/?idt=25"> <button type="button" class="btn btn-block btn-outline-primare">Подробно</button>	</a>
			<a class="on_hr" href="http://kolorado.ru/products/futbolka-muammar-kaddafi---kaddafi-40695?ref=CFE6C24"><button type="button" class="btn btn-block btn-outline-primare">Приобрести</button></a></div></div>
			<div class="kaldy" style="visibility:hidden;"><div><img src="./icons/saat.png"></div><span>Осталось 2050-12-31 дней</span></div>
		</div></div>
@endforeach
<br><br>
{{$tovars->appends(['poisk'=>request()->poisk])->links()}}

@else 
<h1>Записи не найдены</h1>

@endif	
@endsection