package com.lief.TRYY;

import android.app.AlarmManager;
import android.app.PendingIntent;
import android.content.Context;
import android.content.Intent;
import java.util.Calendar;

public class Alarm {
    public void registerAlarm(Context context){

        Intent intent = new Intent(context, AlarmReceiver.class );

        PendingIntent pi = PendingIntent.getBroadcast(context, 0, intent, 0);

        AlarmManager am = (AlarmManager)context.getSystemService(Context.ALARM_SERVICE);
        Calendar calen = Calendar.getInstance();
        calen.set(calen.get(Calendar.YEAR), calen.get(Calendar.MONTH), calen.get(Calendar.DAY_OF_MONTH)+1, 0,0,0);

        am.set(am.RTC_WAKEUP, calen.getTimeInMillis(), pi);

    }
}
