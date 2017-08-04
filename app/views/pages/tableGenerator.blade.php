@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/ui.dynatree.css') }}" />

@stop

@section('content')

    <!-- Menambahkan style width -->
    <div id="wizard" class="span-23 table left" style="float:left; margin-left:0px; padding:5px 0px 0px 10px;
    background-color: #fff;
    border: 1px solid #DEDEDE;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    margin-bottom: 10px ;
    box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);
    -webkit-box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);
    -moz-box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);">
        <div id="wizard-step" class="thead">
            <div class="left" style="padding: 5px;">Langkah Membuat Tabel</div>
            <div class="right" style="padding: 5px;">Langkah <span id="step">1</span> dari 3</div>
        </div>
        <div id="wizard-menu">
            <input type="button" id="back" class="left button button-back" value="Back">
            <input type="button" id="next" class="right button button-next" value="Next">
            <div class="clear"></div>
        </div>
        <div id="wizard-content">
        <!-- Menambahkan style width -->
        <div class="left span-11" style="border-right: 1px solid #C9E0ED; width:480px"> 
            <div id="step1" style="display: block;">
                <div class="dimensi-container" style="border-bottom: 1px solid #C9E0ED;padding:10px;margin-bottom: 5px;height:30px">
                    Dimensi:
                    <select id="dimensi-step1" style="width:150px">
                        <option value="1">Topik &amp; Variabel</option>
                        <option value="2">Waktu</option>
                        <option value="3">Wilayah</option>
                    </select>
                    <input type="text" id="cari-step1" placeholder="Cari Topik Variabel">
                </div>
                <div id="tree1-step1" style="min-height: 300px;"><ul class="dynatree-container"><li class="dynatree-lastsib"><span class="dynatree-node dynatree-lastsib dynatree-statusnode-error dynatree-exp-cl dynatree-ico-c"><span class="dynatree-connector"></span><span class="dynatree-icon"></span><a href="#" class="dynatree-title" title="Internal Server Error">Load error! (error)</a></span></li></ul></div>
                <div id="tree2-step1" style="min-height: 300px;display: none"></div>
                <div id="tree3-step1" style="display: none;min-height: 300px;"></div>
            </div>
            <div id="step2" style="display: none;">
                <div class="dimensi-container" style="border-bottom: 1px solid #C9E0ED;padding:10px;margin-bottom: 5px">
                    Dimensi:
                    <select id="dimensi-step2" style="width:150px"><option value="2">Waktu</option><option value="3">Wilayah</option></select>
                    <input type="text" id="cari-step2">
                </div>
                <div id="tree1-step2" style="min-height: 300px;display: none"></div>
                <div id="tree2-step2" style="min-height: 300px; display: block;"><ul class="dynatree-container"><li class="dynatree-lastsib"><span class="dynatree-node dynatree-lastsib dynatree-statusnode-error dynatree-exp-cl dynatree-ico-c"><span class="dynatree-connector"></span><span class="dynatree-icon"></span><a href="#" class="dynatree-title" title="Internal Server Error">Load error! (error)</a></span></li></ul></div>
                <div id="tree3-step2" style="min-height: 300px;display: none"></div>
            </div>
            <div id="step3" style="display: none;">
                <div class="dimensi-container" style="border-bottom: 1px solid #C9E0ED;padding:10px;margin-bottom: 5px">
                    Dimensi: <span id="dimensi-span3" style="font-weight: bold"><input type="hidden" id="dimensi-step3" value="3"> Wilayah</span>
                    <input type="text" id="cari-step3">
                </div>
                <div id="tree1-step3" style="min-height: 300px;display: none"></div>
                <div id="tree2-step3" style="min-height: 300px;display: none"></div>
                <div id="tree3-step3" style="min-height: 300px; display: block;"><ul class="dynatree-container"><li class="dynatree-lastsib"><span class="dynatree-node dynatree-lastsib dynatree-statusnode-error dynatree-exp-cl dynatree-ico-c"><span class="dynatree-connector"></span><span class="dynatree-icon"></span><a href="#" class="dynatree-title" title="Internal Server Error">Load error! (error)</a></span></li></ul></div>
            </div>
        </div>
            <!-- Menambahkan style width -->
            <div id="terpilih" class="left span-11" style="width: 460px;">
                <div class="dimensi-container" style="padding:10px;padding-left:0px;margin-left: 0px;margin-bottom: 5px;height:30px">
                    Dimensi Terpilih:
                </div>
                <div id="dim-terpilih" style="min-height: 300px;"><ul class="dynatree-container"></ul></div>
            </div>
        </div>  
    </div>
    <center><div id="tabel-loader" style="display: none;"></div></center>
    <div id="tabel-hasil" style="display: none;"></div>

@stop

@section('scripts')

<script src="{{ URL::asset('assets/js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/jquery-ui.custom.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/js/jquery.dynatree.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/tabel.js')}}" type="text/javascript"></script> 
@stop