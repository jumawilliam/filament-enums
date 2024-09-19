<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus:string implements HasLabel,HasDescription,HasIcon,HasColor
{
    case Placed = 'order placed';
    case Processing = 'processing';
    case Shipped = 'shipped';
    case Delivered = 'delivered';
    case Canceled = 'cancelled';


    public function getLabel(): ?string
    {

        return $this->name;

    }

    public function getDescription(): ?string
    {
        return match($this) {
            self::Placed => 'You have placed the order.',
            self::Processing => 'We are working on your order',
            self::Shipped => 'We are shipping your order',
            self::Delivered => 'Your order has been delivered',
            self::Canceled => 'Your order has been canceled',
        };
    }

    public function getIcon(): ?string
    {
        return match($this) {
            self::Placed => 'heroicon-o-shopping-cart',
            self::Processing => 'heroicon-o-shopping-cart',
            self::Shipped => 'heroicon-o-truck',
            self::Delivered => 'heroicon-o-check-circle',
            self::Canceled => 'heroicon-o-x-circle',
        };
    }

    public function getColor(): ?string
    {
        return match($this) {
            self::Placed => 'info',
            self::Processing => 'primary',
            self::Shipped => 'gray',
            self::Delivered => 'success',
            self::Canceled => 'danger',
        };
    }

}
