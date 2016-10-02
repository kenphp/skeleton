<div class="col-md-3">
    <p class="lead">Menu</p>
    <div class="list-group">
        <a
            href="/"
            class="list-group-item
            <?php echo (app()->request->pathInfo == '/') ? 'active' : '' ?>"
        >
            Index
        </a>
        <a
            href="#"
            class="list-group-item"
            >
            Item 1
        </a>
        <a
            href="#"
            class="list-group-item"
            >
            Item 2
        </a>
        <a
            href="#"
            class="list-group-item"
            >
            Item 3
        </a>
    </div>
</div>
