<?php

const ROOM_INIT_API   = 'https://api.live.bilibili.com/room/v1/Room/room_init?id=';
const ROOM_SERVER_API = 'https://api.live.bilibili.com/api/player?id=cid:';
const ROOM_PLAY_API   = 'https://api.live.bilibili.com/room/v1/Room/playUrl?cid=';

const FFMPEG_EXEC_PATH = '/Users/wuyin/Desktop/ffmpeg/bin/ffmpeg';
const VIDEO_SAVE_DIR   = '/Users/wuyin/Desktop/';

const ACTION_ENTRY     = 7;
const ACTION_HEARTBEAT = 2;
const UID              = 18466419;

const DB_NAME   = 'bilibili';
const DB_HOST   = '127.0.0.1';
const DB_USER   = 'root';
const DB_PASSWD = '123456';


const GIFT_RATE = 1000;        // B 站礼物 1000 金瓜子 = 1 RMB