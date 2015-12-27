    /**
    * o------------------------------------------------------------------------------o
    * | This file is part of the RGraph package - you can learn more at:             |
    * |                                                                              |
    * |                          http://www.rgraph.net                               |
    * |                                                                              |
    * | This package is licensed under the RGraph license. For all kinds of business |
    * | purposes there is a small one-time licensing fee to pay and for personal,    |
    * | charity and educational purposes it is free to use. You can read the full    |
    * | license here:                                                                |
    * |                      http://www.rgraph.net/LICENSE.txt                       |
    * o------------------------------------------------------------------------------o
    */
    
    if (typeof(RGraph) == 'undefined') RGraph = {};

    /**
    * The LED lights constructor
    * 
    * @param object canvas The canvas object
    * @param array  data   The chart data
    */
    RGraph.LED = function (id, text, led_type, led_colour)
    {
        // Get the canvas and context objects
        this.id                = id;
        this.canvas            = document.getElementById(id);
        this.context           = this.canvas.getContext ? this.canvas.getContext("2d") : null;
        this.canvas.__object__ = this;
        this.type              = 'led';

        /**
        * Set the string that is to be displayed
        */
        this.text = text;
        
        /**
        * The letters and numbers
        */
        this.lights = [];
        this.lights['a'] = [[0,1,1,0],[1,0,0,1],[1,0,0,1],[1,1,1,1],[1,0,0,1],[1,0,0,1],[1,0,0,1]];
        this.lights['b'] = [[1,1,1,0],[1,0,0,1],[1,0,0,1],[1,1,1,0],[1,0,0,1],[1,0,0,1],[1,1,1,0]];
        this.lights['c'] = [[0,1,1,0],[1,0,0,1],[1,0,0,0],[1,0,0,0],[1,0,0,0],[1,0,0,1],[0,1,1,0]];
        this.lights['d'] = [[1,1,1,0],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,1,1,0]];
        this.lights['e'] = [[1,1,1,1],[1,0,0,0],[1,0,0,0],[1,1,1,0],[1,0,0,0],[1,0,0,0],[1,1,1,1]];
        this.lights['f'] = [[1,1,1,1],[1,0,0,0],[1,0,0,0],[1,1,1,0],[1,0,0,0],[1,0,0,0],[1,0,0,0]];
        this.lights['g'] = [[0,1,1,0],[1,0,0,1],[1,0,0,0],[1,0,1,1],[1,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['h'] = [[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,1,1,1],[1,0,0,1],[1,0,0,1],[1,0,0,1]];
        this.lights['i'] = [[0,1,1,1],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,1,1,1]];
        this.lights['j'] = [[0,1,1,1],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,1,0,0]];
        this.lights['k'] = [[1,0,0,1],[1,0,0,1],[1,0,1,0],[1,1,0,0],[1,0,1,0],[1,0,0,1],[1,0,0,1]];
        this.lights['l'] = [[1,0,0,0],[1,0,0,0],[1,0,0,0],[1,0,0,0],[1,0,0,0],[1,0,0,0],[1,1,1,1]];
        this.lights['m'] = [[1,0,0,1],[1,1,1,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1]];
        this.lights['n'] = [[1,0,0,1],[1,1,0,1],[1,0,1,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1]];
        this.lights['o'] = [[0,1,1,0],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['p'] = [[1,1,1,0],[1,0,0,1],[1,0,0,1],[1,1,1,0],[1,0,0,0],[1,0,0,0],[1,0,0,0]];
        this.lights['q'] = [[0,1,1,0],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,1,1],[0,1,1,1]];
        this.lights['r'] = [[1,1,1,0],[1,0,0,1],[1,0,0,1],[1,1,1,0],[1,0,1,0],[1,0,0,1],[1,0,0,1]];
        this.lights['s'] = [[0,1,1,0],[1,0,0,1],[1,0,0,0],[0,1,1,0],[0,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['t'] = [[1,1,1,0],[0,1,0,0],[0,1,0,0],[0,1,0,0],[0,1,0,0],[0,1,0,0],[0,1,0,0]];
        this.lights['u'] = [[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['v'] = [[1,0,1],[1,0,1],[1,0,1],[1,0,1],[1,0,1],[0,1,0],[0,1,0]];
        this.lights['w'] = [[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,1,1,1],[0,1,1,0]];
        this.lights['x'] = [[0,1,0,1],[0,1,0,1],[0,1,0,1],[0,0,1,0],[0,1,0,1],[0,1,0,1],[0,1,0,1]];
        this.lights['y'] = [[0,1,0,1],[0,1,0,1],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0]];
        this.lights['z'] = [[1,1,1,1],[0,0,0,1],[0,0,1,0],[0,0,1,0],[0,1,0,0],[1,0,0,0],[1,1,1,1]];
        this.lights[' '] = [[],[],[],[],[], [], []];
        this.lights['0'] = [[0,1,1,0],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['1'] = [[0,0,1,0],[0,1,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,1,1,1]];
        this.lights['2'] = [[0,1,1,0],[1,0,0,1],[0,0,0,1],[0,0,1,0],[0,1,0,0],[1,0,0,0],[1,1,1,1]];
        this.lights['3'] = [[0,1,1,0],[1,0,0,1],[0,0,0,1],[0,1,1,0],[0,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['4'] = [[1,0,0,0],[1,0,0,0],[1,0,1,0],[1,0,1,0],[1,1,1,1],[0,0,1,0],[0,0,1,0]];
        this.lights['5'] = [[1,1,1,1],[1,0,0,0],[1,0,0,0],[1,1,1,0],[0,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['6'] = [[0,1,1,0],[1,0,0,1],[1,0,0,0],[1,1,1,0],[1,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['7'] = [[1,1,1,1],[0,0,0,1],[0,0,0,1],[0,0,1,0],[0,1,0,0],[0,1,0,0],[0,1,0,0]];
        this.lights['8'] = [[0,1,1,0],[1,0,0,1],[1,0,0,1],[0,1,1,0],[1,0,0,1],[1,0,0,1],[0,1,1,0]];
        this.lights['9'] = [[0,1,1,1],[1,0,0,1],[1,0,0,1],[0,1,1,1],[0,0,0,1],[0,0,0,1],[0,0,0,1]];
        this.lights['|'] = [[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,0,1,0],[0,1,1,1],[0,0,1,0]];


        // Various config type stuff
        this.properties               = [];
        this.properties['chart.background']     = '#fff';
        this.properties['chart.dark']           = '#eee';
        this.properties['chart.light']          = '#f66';
        this.properties['chart.led_type']             = led_type;
        this.properties['chart.led_colour']           = led_colour;

        // Check for support
        if (!this.canvas) {
            alert('[LED] No canvas support');
            return;
        }
        
        // Check the canvasText library has been included
        if (typeof(RGraph) == 'undefined') {
            alert('[LED] Fatal error: The common library does not appear to have been included');
        }
    }


    /**
    * A setter
    * 
    * @param name  string The name of the property to set
    * @param value mixed  The value of the property
    */
    RGraph.LED.prototype.Set = function (name, value)
    {
        this.properties[name.toLowerCase()] = value;
    }


    /**
    * A getter
    * 
    * @param name  string The name of the property to get
    */
    RGraph.LED.prototype.Get = function (name)
    {
        return this.properties[name.toLowerCase()];
    }


    /**
    * This draws the LEDs
    */
    RGraph.LED.prototype.Draw = function ()
    {
        // First clear the canvas, using the background colour
        RGraph.Clear(this.canvas, this.Get('chart.background'));
        
        //var vInputString = this.text;
        //var vArray = vInputString.split(" ");
        //var vRes = vArray[0] + ":" + vArray[2];
        if(this.Get('chart.led_type') == 1){
            
            var vInputString = this.text;
            var vArray = vInputString.split(" ");
            var ledtext1 = vArray[0];
            var ledtext2 = vArray[1];
            var ledtext3 = vArray[2];

            // example
            // 123 int x
            // 012345678

            leng1 = ledtext1.length;
            lim1_1 = 0;                         // 0
            lim1_2 = lim1_1 + leng1;            // 3

            leng2 = ledtext2.length;            
            lim2_1 = lim1_2 + 1;                // 4
            lim2_2 = lim2_1 + leng2;            // 7                 

            leng3 = ledtext3.length; 
            lim3_1 = lim2_2 + 1;                // 8
            lim3_2 = lim3_1 + leng3             // 9

            // warna led
            aColour = this.Get('chart.led_colour').split(",");
            colour1 = aColour[0];
            colour2 = aColour[1];
            colour3 = aColour[2];

            for (var l=0; l<this.text.length; l++) {
                if(l>=lim1_1 && l < lim1_2){
                    this.DrawLetter(this.text.charAt(l), l, colour1);
                }else if(l>=lim2_1 && l <= lim2_2){
                    this.DrawLetter(this.text.charAt(l), l, colour2);
                }else{
                    this.DrawLetter(this.text.charAt(l), l, colour3);
                }
            }

            
        }else{

        for (var l=0; l<this.text.length; l++) {
            this.DrawLetter(this.text.charAt(l), l, this.Get('chart.led_colour'));
        }

        }
        
        /**
        * Set the title attribute on the canvas
        */
        this.canvas.title = RGraph.rtrim(this.text);
    }


    /**
    * Draws a single letter
    * 
    * @param string lights The lights to draw to draw
    * @param int    index  The position of the letter
    */
    RGraph.LED.prototype.DrawLetter = function (letter, index, led_colour)
    {
        var light    = led_colour;
        var dark     = this.Get('chart.dark');
        var lights   = (this.lights[letter] ? this.lights[letter] : [[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]]);
        var lwidth   = this.canvas.width / this.text.length;
        //var diameter = lwidth / 5;
        //var radius   = diameter / 2;
        var diameter = lwidth / 5;
        var radius   = diameter / 3;

        for (var i=0; i<7; i++) {
            for (var j=0; j<5; j++) {

                var x = (j * diameter) + (index * lwidth) + radius;
                var y = (this.canvas.height / 2) + ((i * diameter) + 2) - (7 * radius);

                // Draw a circle
                this.context.fillStyle   = (lights[i][j] ? light : dark);
                this.context.strokeStyle = (lights[i][j] ? '#ccc' : 'rgba(0,0,0,0)');
                this.context.beginPath();
                this.context.arc(x, y, radius, 0, 6.28, 0);

                this.context.stroke();
                this.context.fill();
            }
        }
    }