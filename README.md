
# Project

Project Name    : **i9betsocial**

Laravel Version : **10.21.0**

PHP Version     : **8.2.4**
## Development Structure

```
i9betsocial
|_app
  |_Http
  | |_Controllers
  | | |_Api
  | | | |_ImageController.php
  | | | |_VideoController.php
  | | |_Auth
  | | | |_LoginController.php
  | | |_HomeController.php
  | | |_ImageController.php
  | | |_VideoController.php
  | |_Resources
  |   |_Image.php
  |   |_Video.php
  |_Models
    |_Image.php
    |_User.php
    |_Video.php
```

## Administrator

| Name | Email | Password |
| ----------- | ----------- | ----------- |
| admin | admin@i9betsocial.com | 12345678 |

## Database

#### Video

| id | title | link | popular | created_by | updated_by | created_at | updated_at |
| ----------- | ----------- | ----------- | ----------- | ----------- | ----------- | ----------- | ----------- |
| id | string | string | boolean | integer | integer | timestamps | timestamps |

#### Image

| id | name | created_at | updated_at |
| ----------- | ----------- | ----------- | ----------- |
| id | string | timestamps | timestamps |

## API Reference

#### Get all videos

```http
  POST /api/videos
```

```json
[
  {
    "id": 1,
    "link": "https://www.youtube.com/watch?v=-3vAT7ACudo",
    "title": "Tập 21 Gặp Gỡ HOT GIRL i9BET Tại Hồ Tây Thủ Đô HÀ NỘI",
    "popular": 1,
    "created_at": "2023-11-07T16:50:39.000000Z",
    "updated_at": "2023-11-07T16:50:39.000000Z"
  },
  {
    "id": 2,
    "link": "https://www.youtube.com/watch?v=qWYlOwRxmO8",
    "title": "Tập 20 Đêm Của HOT GIRL i9BET Tại Hồ Hoàn Kiếm Thủ Đô HÀ NỘI",
    "popular": 0,
    "created_at": "2023-11-07T16:50:57.000000Z",
    "updated_at": "2023-11-07T16:50:57.000000Z"
  }
]
```

#### Get all images

```http
  POST /api/images
```

```json
[
  "169937231036.png",
  "169937231047.png",
  "169937231085.png",
  "169937271975.png",
  "169937271919.png",
  "169937271910.png"
]
```