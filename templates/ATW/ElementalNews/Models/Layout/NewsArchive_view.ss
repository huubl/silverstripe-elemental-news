<% with $News %>
    <section class="section section--text section--centered <% if $Variant %>$Variant<% end_if %>">
        <div class="section_content">
            <h2>$Title</h2>
            <div class="section_items">
                <div class="text">
                    $Description
                </div>
            </div>
        </div>
    </section>
    $ElementalArea
<% end_with %>