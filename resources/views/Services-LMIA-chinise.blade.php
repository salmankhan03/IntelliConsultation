@extends('layout')
@section('content')

<section class="lmia-back">
    <div class="banner-back">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-text">
                    <!--<h5>Options available for Permanent Residence in Canada</h5>-->
                    <h2>LMIA</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end Blog header-->
<!--  Article -->
<section class="section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="content-wrap practice-single">
                    <div class="content-text">
                        <h4 class="par-head-h4 mt-0">LMIA 程序是如何运作的</h4>
                        <p class="par-p">
                        如果雇主有意雇用临时外籍工人（TFW）在加拿大工作，则必须向加拿大就业与社会发展部（ESDC）提交劳动力市场影响评估（LMIA）申请。如果雇主收到正面的 LMIA 评估结果，临时外籍工人就可以向加拿大移民难民和公民部（IRCC）申请工作许可
                        </p>
                        <p class="par-p">
                        政府会评估雇用 TFW 对加拿大就业市场可能产生的影响。正面的 LMIA 表明确实需要外籍工人来填补所申请的特定工作，而且没有加拿大工人或永久居民可以胜任该工作。
                        </p>
                        <h4 class="par-head-h4">如何申请 LMIA？</h4>
                        <p class="par-p">
                        雇主必须证明多次尝试雇用加拿大公民或永久居民担任预定职位，而且沒有成功並并满足 ESDC/Service Canada 规定的要求，才能向 TFW 提供工作。
                        </p>
                        <h4 class="par-head-h4">如何申请 LMIA 以获得快速入境许可</h4>
                        <p class="par-p">
                        一旦雇主收到 LMIA 的肯定答复，具有专业资格的外国技术工人就可以通过快速通道来加拿大工作。
                        </p>
                        <p class="par-p">
                        这一过程需要经过多个阶段，因此申请人咨询移民专业人士非常重要。
                        </p>
                    </div>

                </div>
            </div>
            <!-- end col-md-9 -->
            <!--  col-md-3 -->
            <div class="col-lg-3 col-md-12 col-sm-12 ">
                @include('sidebar')

            </div>
        </div>
    </div>
</section>

@endsection