<section class="section section--news $VariantClasses">
    <div class="section_content">
        <% if $ShowTitle %>
            <h2>$Title</h2>
        <% end_if %>
        $Text
        <div class="section_items">
            <% loop $News %>
            <a href="$Link" class="news">
                <% if $Image %>
                    <div class="news_image">
                        $Image.Fit(300,200)
                    </div>
                <% end_if %>
                <div class="news_content">
                    <p class="topline">$Date.Format("d.m.Y")</p>
                    <h3>$Title</h3>
                    <p>$Description</p>
                </div>
            </a>
            <% end_loop %>
        </div>
    </div>
</section>
