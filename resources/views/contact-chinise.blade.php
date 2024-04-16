@extends('layout')
@section('content')

<section class="contact-back">
           <div class="banner-back">
           </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title-text">
                        <h2>无风险咨询服务</h2>
                     </div>
                  </div>
               </div>
            </div>
</section>
 <section class="contact-section contact-form-back quick-contact-form">
     <div class="container">
         <div class="row">
             <div class="col-md-6">
                 <div class="contact-form-section ">
                     <h5 class="">请随时与我们联系</h5>
                     <p>我們非常重视为客户保密。为了准确评估您的选择，请提供您的联系信息，我们的咨询专家将与您联系。</p>
                 </div>
                 <div class="contact-form-section mt-5">
                     <h5 class="">联系信息</h5>
                     <div class="contact-table-wrap d-flex">
                         <div class="table-item">地址</div>
                         <div class="table-item-right">130-7080 River Road, Richmond, BC, V6X 1X5 Canada</div>
                     </div>
                     <div class="contact-table-wrap d-flex">
                         <div class="table-item">电话 </div>
                         <div class="table-item-right">1-778-297-7108</div>
                     </div>
                     <div class="contact-table-wrap d-flex">
                         <div class="table-item">电子邮件</div>
                         <div class="table-item-right">contact@intelliconsultation.com</div>
                     </div>
                     <div class="contact-table-wrap d-flex">
                         <div class="table-item">营业时间</div>
                         <div class="table-item-right">星期一至星期五：上午 10:00 至下午 5:00（太平洋标准时间）</div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="w-75 mx-auto contact-form-section">
                     <h5 class="mb-3">免費諮詢和評估</h5>
                     <p class="mb-4">我們會根據您填寫的評估表，判斷您移民的資質</p>
                            <!-- Form -->

                            {!! Form::open(['url' => '/contact_mail','method'=>"POST"]) !!}
                                {!! Form::text('fname', null, array('placeholder'=>'名')) !!}
                                @error('fname')
                                <div class="alert alert-danger">{{ $errors->first('fname')}}</div>
                                @enderror
                                <br/>
                                {!! Form::text('lname', null, array('placeholder'=>'姓', 'class'=>'mt-20')) !!}
                                <br/>
                                {!! Form::text('email', null, array('placeholder'=>'電郵', 'class'=>'mt-20')) !!}
                                @error('email')
                                <div class="alert alert-danger">{{ $errors->first('email')}}</div>
                                @enderror
                                <br/>
                                {!! Form::text('number', null, array('placeholder'=>'電話', 'class'=>'mt-20')) !!}
                                @error('number')
                                <div class="alert alert-danger">{{ $errors->first('number')}}</div>
                                @enderror
                                <br/>
                                {!! Form::text('country', null, array('placeholder'=>'現居國家', 'class'=>'mt-20')) !!}
                                @error('country')
                                <div class="alert alert-danger">{{ $errors->first('country')}}</div>
                                @enderror
                                <br/>
                                <p class="mt-20">怎麼找到我們</p>

                                 {!! Form::radio('referer', 'By Referer',false, ['onchange' => 'yourFunction()']); !!} 推薦
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 {!! Form::radio('referer', 'Other', false, ['onchange' => 'yourFunction()']); !!} 其他
                                 <div id="referer_name" style="display: none;" class="mt-20">
                                     {!! Form::text('referer_name', null, array('placeholder'=>'Referrer Name')) !!}
                                 </div>
                                 <div id="other" style="display: none;" class="mt-20">
                                     {!! Form::text('other', null, array('placeholder'=>'Fill in Here')) !!}
                                 </div>

                                {!! Form::textarea('message', null, array('placeholder'=>'我們該怎樣幫助你？ 盡可能具有描述性', 'class'=>'mt-20')) !!}
                                <br/>
                                {!! Form::submit('提交') !!}
                            {!! Form::close() !!}
                 </div>
             </div>
         </div>
     </div>
</section>

@endsection