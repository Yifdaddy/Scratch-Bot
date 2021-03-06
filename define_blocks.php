<!-- define new blocks -->
<script>
Blockly.Blocks['say'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("say")
        .appendField(new Blockly.FieldTextInput("Hello, welcome to my restaurant."), "content");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['say_with_var'] = {
  init: function() {
    this.appendValueInput("var")
        .setCheck(null)
        .appendField("say")
        .appendField(new Blockly.FieldTextInput(""), "before");
    this.appendDummyInput()
        .appendField(new Blockly.FieldTextInput(""), "after");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(0);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask")
        .appendField(new Blockly.FieldTextInput("How are you?"), "content");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(330);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['send_menu'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("send menu");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(0);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['send_order'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("send order details");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(0);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['save_order'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("push order to restaurant");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(0);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask_name'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask for name");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask_address'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask for address");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask_order'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask \"What would you like to order?\"");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask_phone'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask for phone");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask_email'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask for email");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['ask_type'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("ask for type of order (dilivery/pickup)");
    this.setPreviousStatement(true, null);
    this.setNextStatement(true, null);
    this.setColour(210);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['restaurantName'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("restaurant name");
    this.setOutput(true, null);
    this.setColour(90);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['restaurantPhone'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("restaurant phone");
    this.setOutput(true, null);
    this.setColour(90);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.Blocks['restaurantAddress'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("restaurant address");
    this.setOutput(true, null);
    this.setColour(90);
 this.setTooltip("");
 this.setHelpUrl("");
  }
};

Blockly.JavaScript['say'] = function(block) {
  var content = block.getFieldValue('content');
  // TODO: Assemble JavaScript into code variable.
  var code = 'if(exitStep <= currentStep){\
                botReply("'+content+'");\
              }';
  return code;
};

Blockly.JavaScript['say_with_var'] = function(block) {
  var text_before = block.getFieldValue('before');
  var value_var = Blockly.JavaScript.valueToCode(block, 'var', Blockly.JavaScript.ORDER_ATOMIC);
  var text_after = block.getFieldValue('after');
  value_var = value_var.substring(1, value_var.length-1);
  // TODO: Assemble JavaScript into code variable.
  var code = 'if(exitStep <= currentStep){\
                botReply("'+text_before+'"+'+value_var+'+"'+text_after+'");\
              }';
  return code;
};

Blockly.JavaScript['ask'] = function(block) {
  var content = block.getFieldValue('content');
  // TODO: Assemble JavaScript into code variable.
  var code =  'currentStep++;\
              if(exitStep < currentStep){\
                botReply("'+content+'");\
                exitStep = currentStep;\
                throw("wait for user confirm");\
              }else if(exitStep == currentStep){\
              }';
  return code;
};

Blockly.JavaScript['send_menu'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'if(exitStep <= currentStep){\
                botReply(fullmenu);\
              }';
  return code;
};

Blockly.JavaScript['send_order'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'if(exitStep <= currentStep){\
                sendOrder();\
              }';
  return code;
};

Blockly.JavaScript['save_order'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'if(exitStep <= currentStep){\
                saveOrder();\
              }';
  return code;
};

Blockly.JavaScript['ask_name'] = function(block) {
  totalStep++;
  // TODO: Assemble JavaScript into code variable.
  var code = 'currentStep++;\
              if(exitStep < currentStep){\
                botReply("What is your name?");\
                exitStep = currentStep;\
                throw("wait for user name");\
              }else if(exitStep == currentStep){\
                orderName = userInput;\
              }';
  return code;
};

Blockly.JavaScript['ask_address'] = function(block) {
  totalStep++;
  // TODO: Assemble JavaScript into code variable.
  var code = 'currentStep++;\
              if(exitStep < currentStep){\
                botReply("What is your address?");\
                exitStep = currentStep;\
                throw("wait for user address");\
              }else if(exitStep == currentStep){\
                orderAddress = userInput;\
              }';
  return code;
};

Blockly.JavaScript['ask_order'] = function(block) {
  totalStep++;
  // TODO: Assemble JavaScript into code variable.
  var code = 'currentStep++;\
              if(exitStep < currentStep){\
                botReply("What would you want to order?");\
                exitStep = currentStep;\
                throw("wait for user order");\
              }else if(exitStep == currentStep){\
                orderFood = userInput;\
              }';
  return code;
};

Blockly.JavaScript['ask_phone'] = function(block) {
  totalStep++;
  // TODO: Assemble JavaScript into code variable.
  var code = 'currentStep++;\
              if(exitStep < currentStep){\
                botReply("What is your phone number?");\
                exitStep = currentStep;\
                throw("wait for user phone");\
              }else if(exitStep == currentStep){\
                orderPhone = userInput;\
              }';
  return code;
};

Blockly.JavaScript['ask_email'] = function(block) {
  totalStep++;
  // TODO: Assemble JavaScript into code variable.
  var code = 'currentStep++;\
              if(exitStep < currentStep){\
                botReply("What is your email address?");\
                exitStep = currentStep;\
                throw("wait for user email");\
              }else if(exitStep == currentStep){\
                orderEmail = userInput;\
              }';
  return code;
};

Blockly.JavaScript['ask_type'] = function(block) {
  totalStep++;
  // TODO: Assemble JavaScript into code variable.
  var code = 'currentStep++;\
              if(exitStep < currentStep){\
                botReply("Dilivery or Pickup?");\
                exitStep = currentStep;\
                throw("wait for user order type");\
              }else if(exitStep == currentStep){\
                orderType = userInput;\
              }';
  return code;
};

Blockly.JavaScript['restaurantName'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'restaurantName';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

Blockly.JavaScript['restaurantPhone'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'restaurantPhone';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

Blockly.JavaScript['restaurantAddress'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'restaurantAddress';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};

</script>


<!-- define blocks -->
<xml id="toolbox" style="display:none">
    <block type="say"></block>
    <block type="say_with_var"></block>
    <block type="ask"></block>
    <block type="ask_order"></block>
    <block type="ask_name"></block>
    <block type="ask_address"></block>
    <block type="ask_phone"></block>
    <block type="ask_email"></block>
    <block type="ask_type"></block>
    <block type="restaurantName"></block>
    <block type="restaurantPhone"></block>
    <block type="restaurantAddress"></block>
    <block type="send_order"></block>
    <block type="send_menu"></block>
    <block type="save_order"></block>
</xml>
