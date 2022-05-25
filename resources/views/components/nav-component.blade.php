<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    @foreach( $sections as $section)
       <li><a href="{{ route('sections.show', $section->id)}}">{{ $section->title }}</a></li>
       @endforeach
</div>