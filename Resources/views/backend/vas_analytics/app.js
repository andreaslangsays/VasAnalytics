
Ext.define('Shopware.apps.VasAnalytics', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.VasAnalytics',

    loadPath: '{url action=load}',
    bulkLoad: true,

    controllers: [ 'Main' ],

    views: [
        'list.Window',
        'list.List',

        'detail.Container',
        'detail.Window'
    ],

    models: [ 'Main' ],
    stores: [ 'Main' ],

    launch: function() {
        return this.getController('Main').mainWindow;
    }
});