<li class="thread_wrap media {$identifier}" data-identifier="{$identifier}">
    {if $photo}
        <img src="{$photo | phpthumbon : 'w=60&h=60&zc=1'}" class="author_photo mr-3" alt="{$fullname | Jevix}">
    {else}
        <div class="author_nophoto text-center mr-3">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
    {/if}
    <div class="media-body">
        <div class="float-right">
            <span class="thread_date text-muted">{$createdon | DateAgo} {$max_createdon | DateAgo}</span>
        </div>
        <h3 class="author_name mt-0">{$fullname | Jevix | ellipsis : 50}</h3>
        {if $count}
            <div class="float-right">
                <span class="thread_count badge badge-primary">{$count}</span>
            </div>
        {/if}
        <div class="message_text">
            {if $createdby == $_modx->user.id}<span class="text-muted">{'remessages_you' | lexicon}:</span>{/if}
            {$text | Jevix | striptags | reMessagesSmiles}
        </div>
    </div>
</li>
