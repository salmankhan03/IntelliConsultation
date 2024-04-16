<div class="blog-wrap-right">
{{--    <div class="banner">--}}
{{--        <h4>Solutions based on your assessment results and needs. Talk to our team of friendly professionals now and tailor a solution suited for you.</h4>--}}
{{--        <a class="contact-link"  href="{!!url('/contactus')!!}">Free Consultation</a>--}}
{{--    </div>--}}
    <div class="category">
        <h4 class="font-head">Latest News</h4>
        <div class="line-red-2 ml-0"></div>
        @php
            $latest = latestNews();
        @endphp
        @foreach ($latest as $l)
            <div class="latest-posts-item d-flex">
                @if($l->postBanner != "")
                    <div class="w-25 sidebar-thumbnail">
                        <img class="thumbnail-img" src='{{asset('uploads/'.$l->postBanner)}}' alt="{{$l->postSlug}}">
                    </div>
                @endif
                <div class="latest-post-text">
                    <h5><a href="{!!url('/News-details/'.$l->postID)!!}">{{$l->postTitle}}</a></h5>
                    <h6>By <span class="color-source">{{$l->postSource}} </span>{{date('F j, Y', strtotime($l->postDate))}}</h6>
                </div>
            </div>
            <hr/>
        @endforeach
    </div>
    <div class="category space-60">
        <h4 class="font-head">Other Services</h4>
        <div class="line-red-2 ml-0"></div>
        <ul>
            <li><a href="{!!url('/Services-express_entry')!!}">Express Entry</a></li>
            <li><a href="{!!url('/Services-LMIA')!!}">LMIA</a></li>
            <li><a href="{!!url('/Services-PNP')!!}">PNP</a></li>
            <li><a href="{!!url('/Services-startup_visa')!!}">Start Up Visa</a></li>
            <li><a href="{!!url('/Services-caregiver')!!}">Caregiver</a></li>
            <li><a href="{!!url('/Services-workpermit')!!}">Work Permit</a></li>
            <li><a href="{!!url('/Services-studypermit')!!}">Study Permit</a></li>
            <li><a href="{!!url('/Services-visitorvisa')!!}">Visitor Visa</a></li>
            <li><a href="{!!url('/Services-family_sponsor')!!}">Family Sponsorship</a></li>
            <li><a href="{!!url('/Services-prcard')!!}">PR Card</a></li>
            <li><a href="{!!url('/Services-citizenship')!!}">Citizenship Application</a></li>
        </ul>
    </div>

{{--    <div class="categories space-60">--}}
{{--        <h4 class="font-head">News Categories</h4>--}}
{{--        <div class="line-red-2 normal-line"></div>--}}
{{--        <div class="tag-wrap d-flex justify-content-start flex-wrap">--}}
{{--            @php--}}
{{--                $blog_category = getCategory();--}}
{{--            @endphp--}}
{{--            <a id="allcoupon" class ="tag-button" href="#" onclick="javascript:getCategoryWiseBlog('all')">All <span class="sr-only">(current)</span></a>--}}
{{--            @foreach($blog_category as $bcat)--}}
{{--                <a class="tag-button" href="{!!url('/News-category/'.$bcat->catID)!!}">{!!$bcat->catTitle!!}</a>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
</div>