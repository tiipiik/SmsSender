## SMS SENDER plugin for OctoberCMS

### Install
Use Tiipiik.SmsSender to search/install this plugin.


* In the backend panel, go to System -> Updates
* Click Install Plugin
* Go to http://clickatell.com and create your account or sign in
* Get your API credentials
* Add your Clickatell datas on the System -> SmsSender section
* Add at the top level of your controllers `use Tiipiik\SmsSender\Models\Setting as SmsSender;`
* Send Sms with `SmsSender::sendMessage('phone_number_of_target', 'message·');`


### Dashboard Widget
You can add a dashbord widget to get informations about status of messages.

* Number of days to display dtaa for : 0 for the current day, 1 for current day and yesterday, etc.
* Display only failed messages : display only failed messages or all messages

### Need more gateways ?
If you need or already use other gateways, let me know and I'll add it to the plugin.

### Like this plugin?
If you like this plugin or if you use some of my plugins, you can help me to make new plugins and provide plugins support and further development. Make donation with PayPal or give this plugin a Like. :)

### License
The Import plugin for OctoberCMS is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).