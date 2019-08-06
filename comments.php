<?php
    if(have_comments()): ?>
        <div class="comment-area">
            <h3 id="comments">Comments</h3>
            <ol class="comments-list">
                <?php wp_list_comments(); ?>
            </ol>
        </div>
<?php endif; ?>
<?php $args = array(
    'title_reply' => 'Leave a Reply',
    'label_submit' => 'Submit Comment',
);
comment_form( $args ); ?>