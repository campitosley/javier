

Ext.onReady(function() {

	var botoncito=Ext.create('Ext.Button', {
	    text     : 'Button',
	    renderTo : Ext.getBody(),
	    listeners: {
	        click: function() {
	            // this == the button, as we are in the local scope
	         //   this.setText('I was clicked!');
	        	window.location = "http://mexico-movil.com/cursos/basedatos/base2.pdf"
	        },
	        mouseover: function() {
	            // set a new config which says we moused over, if not already set
	            if (!this.mousedOver) {
	                this.mousedOver = true;
	                alert('You moused over a button!\n\nI wont do this again.');
	            }
	        }
	    }
	});

	Ext.create('Ext.form.Panel', {
	    title: 'Upload a Photo',
	    width: 400,
	    bodyPadding: 10,
	    frame: true,
	    renderTo:'formita',
	//    renderTo: Ext.getBody(),  este es cuando este solito en toda la pagina
	    items: [botoncito,{
	        xtype: 'filefield',
	       
	        name: 'file',
	        fieldLabel: 'Archivo',
	        labelWidth: 50,
	        msgTarget: 'side',
	        allowBlank: false,
	        anchor: '100%',
	        buttonText: 'Seleccionar archivo'
	    }],

	    buttons: [{
	        text: 'Subir archivo',
	        handler: function() {
	            var form = this.up('form').getForm();
	            if(form.isValid()){
	                form.submit({
	                    url: '../servicio/malo',
	                    waitMsg: 'Subiendo tu archivo...',
	                    success: function(fp,o) {
	                    	 Ext.Msg.alert("Exito","Estatus de archivo:"+o.result.data);
	                    //	var resData = Ext.util.JSON.decode(o.result.data);         	
	                     //  Ext.Msg.alert("todo con esto");
	                    },
	                failure: function(form,action){
	                	 //  Ext.Msg.alert("Error algo anduvo malisimosasa");
	                	Ext.Msg.alert("Error","No se pudo cargar tu archivo, tal vez esta muy pesado");
	                	
	                }
	                });
	            }
	        }
	    }]
	});


});