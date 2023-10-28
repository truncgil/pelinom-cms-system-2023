<?php use App\Translate; 
if(getisset("cache")) {
	$sorgu = db("translate")->where("dil", $id)->get();
	$dizi = [];
	foreach($sorgu AS $s) {
		$dizi[$s->icerik] = $s->ceviri;
	}
	$content = json_encode_tr($dizi);
	//dump($dizi);
	@mkdir("resources/lang/", true);
	file_put_contents("resources/lang/$id.json",$content);
	exit();						
}
?>
@extends('admin.master')
@section("title",__($id)." ".__("Translate Table"))
@section("desc",__($id)." ".__(" "))
@section('content')
<script src="https://cdn.jsdelivr.net/npm/@@json-editor/json-editor@latest/dist/jsoneditor.min.js"></script>

<script>

$(document).ready(function(){
  $("#ceviri-ara").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#ceviri-table tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style type="text/css">
.tek-satir {
	white-space:nowrap;
	max-width:250px;
	text-overflow:ellipsis;
	overflow:hidden
}

</style>
	
	<div class="content">
		<div class="block">
				 <div class="block-header block-header-default">
					<h3 class="block-title">{{__($id)}}</h3>
					<div class="block-options">
					<script type="text/javascript">
					$(function(){
						$(".satir-olustur").on("click",function(){
							var bu = $(this); bu.html('İşlem yapılıyor. Bu işlem biraz sürebilir...'); 
							$.get('?cache',function(d){
							bu.html('Tüm içeriklerin satırları oluşturuldu');
								window.setTimeout(function(){
									location.reload();
								},1000);
								
							});
						});
					});
					</script>
					<?php $isim = explode(".",$id); ?>
						<div class="block-options-item">
							<a href="?new" class="btn btn-success"><i class="fa fa-plus"></i> {{e2("New")}}</a>
							<div class="btn btn-primary satir-olustur" onclick="">{{__('Store Cache')}}</div>
							<div class="btn btn-info" onclick="$.get('{{url('ajax/set-locale?l='.$isim[0])}}',function(){location.reload();})">{{__('Change language for this:')}} {{e2($isim[0])}}</div>
						</div>
					</div>
				</div>
				<?php 
					
					if(getisset("new")) {
						$array  = [
							'dil' => $id,
							'icerik' => '',
							'ceviri' => ''
						];
						//dump($array);
						ekle2($array,"translate");

					}
					$diller = Translate::where("dil",$id);//->whereRaw("LENGTH(icerik) < 1000");
					if(getisset("q")) {
						$search = htmlentities($_GET['q']);
						$search2 =   ($_GET['q']);
						$diller = $diller->where(function($query) use($search, $search2) {
							$query->orWhere("icerik","like","%$search%");
							$query->orWhere("icerik","like","%$search2%");

						});
					}
					
					$diller =$diller->orderBy("id","DESC")->simplePaginate(100);
				?>
				<div class="block-content">
				<form action="" method="get">
					<input type="text" name="q" class="form-control" value="{{get("q")}}"  placeholder="{{e2("Search")}}..."  /> <br />
				</form>
						@csrf
						<input type="hidden" name="{{base64_encode('json')}}" value="{{$id}}" />
						{{$diller->links()}}
						<table class="table table-bordered table-hover table-striped " id="ceviri-table">
							<thead>
								<tr>
									<th>{{__("Key")}}</th>
									<th>{{__("Value")}}</th>
									<th>{{__("Opt.")}}</th>
								</tr>
							</thead>
							
							<tbody>
							@foreach($diller AS $d)
							
								<tr>
									<td>
										<textarea name="icerik" table="translate" id="{{$d->id}}" cols="30" rows="1" class="edit form-control">{{$d->icerik}}</textarea>
									</td>
									<td>
									<textarea name="ceviri" table="translate" id="{{$d->id}}" cols="30" rows="1" class="edit form-control">{{$d->ceviri}}</textarea>
									</td>
								
						
								<td>
									<a href="" onclick="$.get('?ajax=translate-sil&id={{$d->id}}');
									$(this).parent().parent().remove(); return false" class="btn btn-danger" title="{{__('Bu satırı sil')}}"><i class="fa fa-times"></i></a>
								</td>
							</tr>
							@endforeach
							</tbody>
						</table>
						{{$diller->appends($_GET)->links()}}
				</div>
		</div>
	</div>
<script type="text/javascript">
$(function(){
	$("textarea.ckeditor_textarea").each(function(){
    var textarea_id = $(this).attr("id");
    CKEDITOR.instances[textarea_id].updateElement();
    ckeditor_blur_event(textarea_id)
});

});


</script>
@endsection


