<?php
namespace Estandarte\Standards;

interface NotifierInterface
{
    /**
     * @param NotificationInterface
     * @return mixed
     */
    public function notify(NotificationInterface $notification);
}
