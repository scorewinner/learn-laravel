<aside class="col-md-4 blog-sidebar">
    <div class="p-3 mb-3 bg-light rounded">
        <h4 class="font-italic">About me</h4>
        <p>I am Tim and I work <a href="http://liip.ch">@Liip AG</a> at the moment</p>
    </div>
    <div class="p-3">
        <h4 class="font-italic">Archive</h4>
        <ol class="list-unstyled">
        @foreach($archives as $stats)
            <li>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    {{ $stats['month'] . ' ' . $stats['year']}}
                </a>
            </li>
        @endforeach
        </ol>
    </div>

    <div class="p-3">
        <h4 class="font-italic">Find me online</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/">GitHub</a></li>
            <li><a href="https://gitlab.com/">GitLab</a></li>
            <li><a href="https://twitter.com/">Twitter</a></li>
            <li><a href="http://instagram.com/">Instagram</a></li>
        </ol>
    </div>
</aside>