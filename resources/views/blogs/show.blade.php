<!-- tmp service section -->
<div class="tmp-service-section tmp-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-left-area border-bottom">
                    <div class="thumbnail-top">
                        <img src="{{ asset('assets/images/blog/details/' . $blog['image']) }}" alt="Corporate_business">
                    </div>
                    <div class="blog-details-discription">
                        <div class="category-area">
                            {{ $blog['author'] }} / {{ $blog['designation'] }}
                        </div>
                        <h3 class="title split-collab">{{ $blog['title'] }}</h3>
                        <p class="disc">
                            {{ $blog['description'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
