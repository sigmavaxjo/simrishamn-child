<?php global $post; ?>
<div class="post post-horizontal">
  <div class="grid">
    @if (municipio_get_thumbnail_source(null, array(300, 350)))
      <div class="grid-md-5 grid-sm-12 post-horizontal__image-container">
        <div class="post-horizontal__image"
	     style="background:url('{!! municipio_get_thumbnail_source(null, array(250, 150)) !!}') no-repeat center center;">
	</div>
      </div>
    @endif
    <div class="{{ municipio_get_thumbnail_source(null, array(400, 350)) ? 'grid-md-7 grid-sm-12' : 'grid-md-12' }}
		post-horizontal__content">
	<header class="post-header">
	    <a href="{{ the_permalink() }}">
		<h4>{{ the_title() }}</h4>
		@include('partials.blog.post-info')
	    </a>
      </header>

      <article>
        {{ the_excerpt() }}
      </article>

      @if (!empty(municipio_post_taxonomies_to_display(get_the_id())))
        <ul class="inline-block nav-horizontal tags">
          @foreach (municipio_post_taxonomies_to_display(get_the_id()) as $taxonomy => $terms)
            @foreach ($terms as $term)
              <li>
		<span class="label label-sm" style="{{ apply_filters('Municipio/taxonomy/tag_style', '', $term, $taxonomy) }}">
		  {{ $term->name }}
		</span>
	      </li>
            @endforeach
          @endforeach
        </ul>
      @endif
    </div>
  </div>
</div>
