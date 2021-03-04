var UserNotification = {
    config: {
        btn: '.js_usernotification_btn',
        btnRemove: '.js_usernotification_remove',
        rows: '.js_usernotification_rows',
        row: '.js_usernotification_row',
        totalBlock: '.js_usernotification_total',
        action: '',
        total: 0,
    },
    setConfig: function (config) {
        if (typeof config == 'object') {
            for (var key in config) {
                this.config[key] = config[key];
            }
        }
    },
    initialize: function () {
        var $this = this;
        $(document).ready(function () {
            $('body').on('click', $this.config.btn, function () {
                $this.openNotification();
            });
            $('body').on('click', $this.config.btnRemove, function () {
                $this.removeNotification(this);
            });
        });
    },
    openNotification: function () {
        if ($(this.config.rows).length > 0) {
            if ($(this.config.rows).hasClass('active')) {
                $(this.config.rows).removeClass('active');
            } else {
                $(this.config.rows).addClass('active');
            }
        }
    },
    removeNotification: function (elem) {
        var $this = this;
        var row = $(elem).closest(this.config.row);
        var id = row.attr('data-id');
        $.post(this.config.action, {id: id, action: 'remove'}).done(function (response) {
            try {
                if (typeof response != 'object') {
                    response = JSON.parse(response);
                }
            } catch (e) {
                console.log('Response error');
                return false;
            }
            if (response.success) {
                $this.totalReCount(-1);
            }
        });
        this.removeRowNotification(elem);
    },
    removeRowNotification: function (elem) {
        $(elem).closest(this.config.row).remove();
    },
    totalReCount: function (count) {
        if ($(this.config.totalBlock).length > 0) {
            this.config.total = this.config.total + count;
            if (this.config.total < 0) {
                this.config.total = $(this.config.row).length;
            }
            $(this.config.totalBlock).text(this.config.total);
        }
        $(document).trigger('usernotification_recount', {
            count: this.config.total,
        });
    }
};
UserNotification.initialize();