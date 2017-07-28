<template>
    <li>
        <div class="board-card">
            <p><a href="$">{{ ticketId }}</a> - {{ title }}</p>
            <p style="color:#999;font-size:0.9em;">
                <i class="fa fa-check-square" aria-hidden="true"></i> 52 - 
                <i class="fa fa-paperclip" aria-hidden="true"></i> 2
            </p>
            <p><span class="label label-primary">{{ labelName }}</span></p>
        </div>
    </li>
</template>

<script>
    module.exports = {
        data: function() {
            return {
                title: 'Is this working? I think so...',
                labelName: 'VueStuff',
                ticketId: 'TID-1000'
            }
        }
    }
</script>
