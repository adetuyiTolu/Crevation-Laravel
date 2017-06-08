<div class="blog-post">

    <a href="/companies/{{ $company->id }}">

        <h2 class="blog-post-title">{{ $company->title }}</h2>
                    
    </a>
                    
    <p class="blog-post-meta">{{ $company->created_at->toFormattedDateString() }} by <a href="#">Chris</a></p>

        <p>{{ $company->description }}</p>
                    
</div><!-- /.blog-post -->